<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 

/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksHai = "Hai, ada surat buat kamu nih";
    

konten = [
  {
   gambar: "https://www.upload.ee/image/17729488/gambar_1.gif",
   ucapan: "hiii perempuan yang kutemukan 7 tahun yang lalu, Chelsi Maurina??(takutnya salah cara penulisan atau salah nama,siapa tau kan nama kamu bukan chelsi tapi asep)",
  },
  {
  gambar: "https://www.upload.ee/image/17729506/gambar_2.gif",
  ucapan: "btw makasii ya udah buka linknya, kalo kamu risih gapapa close aja tapi jangan kamu kasih ke orang lain ya linknya only for you soalnya",
  },
  {
  gambar: "https://www.upload.ee/image/17729512/gambar_3.gif",
  ucapan: "sebenarnya aku udah lama mau confess kalo aku suka kamu tapi aku selalu merasa belum pantas buat kamu sama ga ada keberanian juga si, padahal secara jarak kita itu dekat malahan dulu hampir tiap hari kita ketemu",
  },
  {
  gambar: "https://www.upload.ee/image/17729520/gambar_5.gif",
  ucapan: "sialnya sampe sekarang aku ga ada keberanian ditambah sekarang kita udah ga sering ketemu lagi jadi aku bikin beginian dulu aja deh setidaknya biar kamu tahu ada aku orang yang mengagumimu dari lama. sama takut gila kalo di pendam kelamaan wkwk",
  },
  {
  gambar: "https://www.upload.ee/image/17729516/gambar_4.gif",
  ucapan: "yaudah deh untuk sekarang gitu aja, nanti kalo aku udah punya keberanian aku bakal confess dengan cara yang lebih gentle kalo kamu peduli boleh tunggu kalo engga ywdh sii",
  },
  {
  gambar: "https://www.upload.ee/image/17729528/gambar_7.gif",
  ucapan: "makasih ya buat waktunya (kalo kamu baca sampai sini)  Wabillahi Taufik wal Hidayah Wassalamualaikum Warahmatullahi Wabarakatuh.",
  },
  {
  ucapan: "satu lagi deh, kalo ada waktu dengerin atau baca lirik lagunya soalnya relate banget sama yang aku rasain dan itu juga maksud dari pesan ini. jangan lupa juga kamu kirim balasan yaa, udah aku sedia in di akhir, kamu tinggal tulis terserah kamu mau kasih respon positif atau negatif juga no what what",
  },
  {
  gambar: "https://www.upload.ee/image/17729525/gambar_6.gif",
  ucapan: "HANYA DOA!!!<br>bismillah nawaitu someday with you, anugerah terindah (chelsi maurina??)",
  },
];

musik = "https://f.top4top.io/m_3328kq4d00.mp3";
nomorWhatsapp = "6285xxx";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>
