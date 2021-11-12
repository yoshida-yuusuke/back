<?php get_header(); ?>

<?php
//送信で送られてきた、検索条件で選択された「種類」と「地域」の値（スラッグ）を取得する
$shop_type_slug = ($_GET["shop_type"] != "" ? $_GET["shop_type"] : "");
$shop_area_slug = ($_GET["shop_area"] != "" ? $_GET["shop_area"] : "");
// 新たに引っ張ってきた変数
$get_tags = $_GET['shop_tag'];
// $shop_tag_slug[] = ($_GET["shop_tag"] != "" ? $_GET["shop_tag"] : "");

//スラッグからカテゴリー（タクソノミー）の名前を取得する
if ($shop_type_slug != "") {
    $shop_type_name = get_term_by('slug', $shop_type_slug, 'shop_type')->name;
}
if ($shop_area_slug != "") {
    $shop_area_name = get_term_by('slug', $shop_area_slug, 'shop_area')->name;
}
// foreach ($_GET["shop_tag"] as $value) {
//     $shop_tag_name = get_term_by('slug', $value, 'shop_tag')->name;
//     echo $shop_tag_name;
// }
?>

<div style="font-size:17px;margin-top:3rem">

    <h2>検索結果一覧</h2>

    <br><br>

    <b>【検索条件】</b>&nbsp;
    <?php
    if ($shop_type_slug != "") {
        //前の画面で選択されていたうどんの種類を表示
        echo "<b>種類：</b>" . $shop_type_name . "&nbsp;";
    }
    if ($shop_area_slug != "") {
        //前の画面で選択されていた地域を表示
        echo "<b>地域：</b>" . $shop_area_name . "&nbsp;";
    }
    ?>

    <br><br>

    <?php
    //ここから検索のパラメーターを準備する

    //A. 種類と地域の両方が選択されている場合
    $args = array(
        'post_type' => 'shop', //カスタム投稿「shop」
        'post_status' => 'publish', //公開された投稿のみ
        'orderby' =>  'date', //日付の順に並べる
        'order' =>  'DESC', //降順に並べる

        //タクソノミー「shop_type」と「shop_area」のAND検索
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'shop_type',
                'field' => 'slug',
                'terms' => $shop_type_slug //検索条件で選択された「種類」
            ),
            array(
                'taxonomy' => 'shop_area',
                'field' => 'slug',
                'terms' => $shop_area_slug //検索条件で選択された「地域」
            ),
            array(
                'taxonomy' => 'shop_tag',
                'field' => 'slug',
                'terms' => $shop_tag,
                'operator' => 'IN', //ANDかIN
            )
        )
    );




    //B. 種類だけ選択されている場合
    if ($shop_type_slug != "" && $shop_area_slug === "") {
        $args = array(
            'post_type' => 'shop', //カスタム投稿「shop」
            'post_status' => 'publish', //公開された投稿のみ
            'orderby' =>  'date', //日付の順に並べる
            'order' =>  'DESC', //降順に並べる

            //タクソノミー「shop_type」の検索
            'tax_query' => array(
                array(
                    'taxonomy' => 'shop_type',
                    'field' => 'slug',
                    'terms' => $shop_type_slug //検索条件で選択された「種類」
                )
            )
        );
    }

    //C. 地域だけ選択されている
    if ($shop_type_slug === "" && $shop_area_slug != "") {
        $args = array(
            'post_type' => 'shop', //カスタム投稿「shop」
            'post_status' => 'publish', //公開された投稿のみ
            'orderby' =>  'date', //日付の順に並べる
            'order' =>  'DESC', //降順に並べる

            //タクソノミー「shop_area」の検索
            'tax_query' => array(
                array(
                    'taxonomy' => 'shop_area',
                    'field' => 'slug',
                    'terms' => $shop_area_slug //検索条件で選択された「地域」
                )
            )
        );
    }
    //D. 両方選択されていない
    if ($shop_type_slug === "" && $shop_area_slug === "") {
        $args = array(
            'post_type' => 'shop', //カスタム投稿「shop」
            'post_status' => 'publish', //公開された投稿のみ
            'orderby' =>  'date', //日付の順に並べる
            'order' =>  'DESC', //降順に並べる

            //タクソノミー「shop_area」の検索
            // 'tax_query' => array(
            //     array(
            //         'taxonomy' => 'shop_area',
            //         'field' => 'slug',
            //         'terms' => $shop_area_slug //検索条件で選択された「地域」
            //     )
            // )
        );
    }
    ?>

    <?php
    //検索実行
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            //とりあえずタイトル（店名）だけ出力
            the_title();
            echo "<br>";
        }
    }
    wp_reset_postdata();
    ?>


</div>


<?php get_footer(); ?>
