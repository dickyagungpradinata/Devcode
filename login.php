
<html>
    <head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style1.css">
        <title>UNIVERSITAS TEKNOLOGI YOGYAKARTA</title>
    </head>
        <body style="background-color:cornsilk;"> 
            <ul>
               <li class="active"><a href="index.php">Home</a></li>
                <li><a href="sidebar.php">Article</a></li>
                <li><a href="video.php">Video</a></li>
                <li><a href="image.php">Image</a></li>
                <li><a href="login.php">Biodata</a></li>
            </ul> 
            <h1 style="background-color:DodgerBlue;"><center><b>UNIIVERSITAS TEKNOLOGI YOGYAKARTA</b></center></h1>
            <h4><center>FAKULTAS TEKNOLOGI INFORMASI DAN ELEKTRO</center></h4>
            <h2><center>DAFTAR RIWAYAT HIDUP</center></h2>
            <h3><b>ISI BIODATA MAHASISWA :</b></h3>
            <form method ="post" action="">
        <fieldset>
            <legend><b>DATA PERSONAL : </b></legend>
            <label for="nama">Nama Lengkap :</label>
            <input id ="nama" name ="nama" type="text" size="50" placeholder="Nama Lengkap Anda"/>
            <br>
        <br/>
        
            <label for="pngil">Nama Panggilan :</label>
            <input id="pngil" name="pngil" type="text" size="50" placeholder="Nama Panggilan"/><br>
            </br>
            
            <label for="tgllahir">Tanggal Lahir :</label>
            <input id ="tgllahir" type="date" name ="tgllahir" size ="50" placeholder="Tanggal Lahir"/><br>
            <br/>
            
            <label for="jenkel">Jenis Kelamin :</label>
            <form action="/action_page.php">
                <select name="-Jenis-">
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>                   
                </select><br>
            </br>
            
            <label for="agma">Agama :</label>
            <form action="/action_page.php">
                <select name="-Pilih Agama-">
                    <option value="Islam">Islam</option>
                    <option value="Hindhu">Hindhu</option>
                    <option value="Budha">Budha</option>
                    <option value="Katolic">Katolic</option>
                    <option value="Kristen">Kristen</option>
                </select><br>
            </br>
                        
            <label for="Kota">Kota</label>
                <form action="/action_page.php">
                          <select name="-Pilih Kota-">
                                <option value="jogja">Yogyakarta</option>
                                <option value="jkt">Jakarta</option>
                                <option value="sby">Surabaya</option>
                                <option value="bdg">Bandung</option>
                                <option value="sm">Semarang</option>
                                <option value="pp">Papua</option>
                                <option value="pl">Palembang</option>
                                <option value="ml">Malang</option>
                                <option value="jteg">Jawa Tengah</option>
                                <option value="jt">Jawa Timur</option>
                                <option value="jb">Jawa Barat</option>
                                <option value="aceh">Bandaaceh</option>
                                <option value="dps">Denpasar</option>
                                <option value="md">Medan</option>
                                <option value="ksel">Kalimantan Selatan</option>
                                <option value="ktg">Kaliamantan Tengah</option>
                                <option value="kb">Kalimantan barat</option>
                                <option value="kt">Kalimantan Timur</option>
                          </select>
                        <br>
                        <br/>
                        
                        <div>Alamat Lengkap :</div>
                <form action="/action_page.php">
                    <textarea name="alamat" rows="10" cols="30">                        
                    </textarea><br>
                </br>
  
            <label for="tinggi">Tinggi Badan :</label>
            <div><input id ="tinggi" type="number" name ="tinggi" min="1" max="200" step="1" value="2"
                size ="40" placeholder="tinggi"/><label>cm</label>
                        <br>
                        </br><d/>
            <label for="berat">Berat Badan :</label>
            <div><input id ="tinggi" type="number" name ="berat" min="1" max="200" step="1" value="2"
                size ="40" placeholder="berat"/><label>kg</label>
                        <br>
                        </br></div>
            <label for="warna">Warna Kesukaan :</label>
                <div><input id ="warna" type="color" name ="warna" size ="50" list="warna" placeholder="warna"/>
                        <br>
                        </br></div>
            <label for="hobby">Hobby :</label>
                <input id ="hobby" type="text" name ="hobby" size ="50" placeholder="Hobby"/><br>
                        </br>
            <label for="kwn">Kewarganegaraan :</label>
                <input id ="kwn" type="text" name ="kwn" size ="50" placeholder="negara"/><br>
                </br>
                </fieldset>
                
                <fieldset>
                    <legend><b>KONTAK PERSON :</b></legend>
            <label for="email">Email Address :</label>
                <div><input id ="email" name ="email" type="email" placeholder="anything@example.com"/><br>
                    </br></div>
            <label for="telp">Phone Number :</label>
            <div><input id ="telp" name ="telp" type="text" placeholder="+62"/><br>
                </br></div>
            <label for="wa">WhatsApp :</label>
            <div><input id="wa" name="wa" type="text" placeholder="number"/><br>
                </br></div>
            <label for="bbm">BBM :</label>
                <div><input id="bbm" name="bbm" type="text" placeholder="pin"/><br>
                    </br></div>         
                </fieldset>
                
                <fieldset>
                    <legend><b>PENDIDIKAN TERAKHIR</b></legend>
                    <table style="width:100%">
  <tr>
    <th>Jenjang Pendidikan</th>
    <th>Nama Pendidikan</th> 
    <th>Tahun</th>
  </tr>
  <tr>
    <td>SD</td>
    <td>SDN 2 Tungkaran Pangeran</td>
    <td>2008</td>
  </tr>
  <tr>
    <td>SMP</td>
    <td>SMPN 1 Simpang Empat</td>
    <td>2011</td>
  </tr>
  <tr>
    <td>SMA</td>
    <td>SMAN 1 Simpang Empat</td>
    <td>2014</td>
  </tr>
  <tr>
    <td>S1</td>
    <td>Universitas Teknologi Yogyakarta</td>
    <td>2019</td>
  </tr>
  <tr>
    <td>S2</td>
    <td>Universitas Gadjah Mada</td>
    <td>2022</td>
  </tr>
</table>

                </fieldset>

        </form>
              <br>
                <input type ="submit" name="kirim" value="Kirim"/>
        </body>
</html>
