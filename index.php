<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <div class="head">
        <h2>DATA MAHASISWA</h2>
    </div>
    <div class="content">
        <form action="proses.php" method="POST">    
            <div class="card-grup">
                <div class="card-nama">                
                    <label for="nama">Nama</label>                
                    <div class="nama">
                        <input type="text" id="nama" name="nama">
                    </div>
                </div> 
                <div class="card-grup">
                    <label for="nim">NIM</label>
                    <div class="nim">
                        <input type="text" name="nim" id="nim">
                    </div>            
                </div>
                <div class="card-grup">
                    <label for="kelas">Semester</label>
                    <div class="kelas">
                        <input type="number" name="semester" id="semester">
                    </div>                
                </div>
                <div class="card-grup">
                    <label for="jurusan">Jurusan</label>
                    <div class="jurusan">
                        <input type="text" name="jurusan" id="jurusan">
                    </div> 
                </div>
                <div class="card-grup">
                    <label for="alamat">Alamat</label>
                    <div class="alamat">
                        <input type="text" name="alamat" id="alamat">   
                    </div> 
                </div>      
            </div>   
            <div class="button">
                <br><button type="submit">Submit</button>
            </div>                        
        </form>
    </div>

</body>
</html>