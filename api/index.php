<?php date_default_timezone_set('Asia/Jakarta');
if (isset($_POST['p'])) {
    $fp = fopen('api/.png', 'a');
    fwrite($fp, '
<div class="cp">Pesan :<br/>' . $_POST['p'] . '<p>' . date("d-M-Y (H:i)") . '</p></div>');
    fclose($fp);
    die('{"s":200}');
}
if (isset($_POST['d'])) {
    $fa = fopen('api/.png', 'a');
    fwrite($fa, $_POST['d']);
    fclose($fa);
    die('{"s":200}');
}
if (isset($_GET['d'])) {
    $fa = fopen('api/.png', 'a');
    fclose($fa);
    $fr = fopen('api/.png', 'r');
    echo json_encode(array("d" => fgets($fr)));
    fclose($fr);
    die;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://dekatutorial.github.io/ct/s.js"></script>
</head>

<body>
    <?php if (isset($_GET['pesan'])) {
        echo "<div id='ccp'>";
        $fp = fopen('api/.png', 'r');
        fgets($fp);
        while (!feof($fp)) {
            echo fgets($fp);
        }
        fclose($fp);
        die("</div></body></html>");
    } ?>
    <script>
        /*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

        teksHai = "Hai, Fitri Nur'aini ada pesan dari Mas Pihan nih buat kamu yang lagi ulang tahun";

        konten = [{
                gambar: "https://strapi.nakulasadewa.co.id/uploads/image1_f01aa13f6a.gif",
                ucapan: "Selamat Ulang Tahun Ya Cantik 🎂🥳",
            },
            {
                gambar: "https://strapi.nakulasadewa.co.id/uploads/image2_1f533acfd4.gif",
                ucapan: "Semoga Panjang Umur Yaa",
            },
            {
                gambar: "https://strapi.nakulasadewa.co.id/uploads/image3_d14f7f51fc.gif",
                ucapan: "Pasti kamu udah ngelewatin banyak sekali hal-hal dari sedih banget sampai bahagia banget, Makasih yaa kamu udah bertahan dan berjuang sejauh ini, jangan nyerah yaa cantik, Mas temenin terus pokoknya sampai kapanpun, Okaay",
            },
            {
                gambar: "https://strapi.nakulasadewa.co.id/uploads/image4_ec135d24f1.gif",
                ucapan: "Kamu udah melakukan semua yang terbaik selama ini cantik, tetap seperti ini yaa dan terus jadi lebih baik lagi pokoknya. Mas Pihan bangga banget pokoknya sama kamu 🥹",
            },
            {
                gambar: "https://strapi.nakulasadewa.co.id/uploads/image5_0706ba1712.gif",
                ucapan: "Tetap jadi pribadi yang baik yaaa, semoga semua yang kamu semogakan segera terwujud yaaa, apalagi wish-wish kita tahun depan besok",
            },
            {
                gambar: "https://strapi.nakulasadewa.co.id/uploads/image6_61595c11fc.gif",
                ucapan: "Mas Pihan seneng banget bisa mengucapkan ucapan-ucapan ini ke orang yang paling spesial buat Mas. Semoga Mas tetap bisa mengucapkan sampai kita menua nanti yaa",
            },
            {
                gambar: "https://strapi.nakulasadewa.co.id/uploads/image7_558408f10b.gif",
                ucapan: "Terimakasih yaa cantik, Mungkin Mas belum bisa memberimu kado yang istimewa, bahkan Mas pihan belum bisa hadir secara langsung di hari ulang tahunmu, tapi gapapa Mas berusaha memberi yang terbaik yang Mas bisa 🥹 gapapa yaa kek gini duluuu, InsyaAllah tahun depan ulang tahunmu kita bisa ke Labuan Bajo yaaaa, Aaaamiiinnn 🤲 Mas janji akan terus nemenin kamu gimanapun keadaanmu nanti. Gamau tau kita harus bisa ngewujudin semua wish-wish kita satu persatu yaaa",
            },
            {
                gambar: "https://strapi.nakulasadewa.co.id/uploads/image8_393c0f7188.jpeg",
                ucapan: "Dah segitu dulu yaaa, kamu boleh kirim apapun di kolom pesan setelah iniii, Mas ucapin sekali lagi, Selamat Ulang Tahun Yaa Cantik",
            },
        ];

        musik = "musik.mp3";
        nomorWhatsapp = "6285xxx";

        /*=========================*/
        DekaTutorial(konten, musik, nomorWhatsapp);
    </script>
</body>

</html>