<html>
    <head><title>Penilaian Rapot</title><head>
    <body>
        <h1 style color:red><center>Penilaian Rapot Siswa</center><h1><br>
        <h3>Silakan Masukkan data Anda:<h3><br>
        
        <tr>
        <td>Nama Lengkap</td> 
        <td>:</td>
        <td>
            <input type="text" name="nama_lengkap" size=20/>
        </td>

        </tr>
            <td><h3>NIS</td>
            <td>:</td>
            <td>
                <input type="number" name="nomor"><br></td>
        </td>
        </tr>

        <tr>
            <td><h3>Alamat</td>
            <td>:</td>
            <td>
                <textarea name="alamat" cols="30" rows="3"></textarea><br></td><br>
        </td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="laki-laki">
                <label>laki-laki</label>
                <input type="radio" name="jenis_kelamin" value ="Perempuan">
                <label>Perempuan</label>
                </td>
            </tr>
        <tr>
            <td><h3>Agama</td>
            <td>:</td>
            <td>
                <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Buddha ">Buddha</option>
                <option value="Hindu">Hindu</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><h3>Sekolah</td>
            <td>:</td>
            <td>
                <td><input type="text" name="sekolah"><br></td>
        </tr>

        <tr>
            <td><h3>Email</td>
            <td>:</td>
            <td>
                <td><input type="email" name="email"><br></td>
        </tr>

        <tr>
            <td><h3>Pengajar</td>
            <td>:</td>
            <td>
                <td><input type="text" name="pengajar"><br></td>
        </tr>

        <tr>
            <td><h3>Mata pelajaran yang disukai</td>
            <td>:</td>
            <td>
            <input type = "checkbox" name = "mapel" value = "B.sunda">B.sunda<br>
            <input type = "checkbox" name = "mapel" value = "B.Indonesia"> B. Indonesia<br>
            <input type = "checkbox" name = "mapel" value = "Penjaskes"> Penjaskes<br>
            <input type = "checkbox" name = "mapel" value = "sejarah">sejarah<br>
        
        </tr>

        <tr>
            <td><h3>Masukkan nilai ijazah SD</td>
            <td>:</td>
            <td>
            <td><input type="text" name="nilai"><br></td>
        </tr>
        
        <tr>
            <td><input type="submit" name="input" value="masuk"></td>
        </tr>
            </table>
        </FORM>
    </body>
</html>