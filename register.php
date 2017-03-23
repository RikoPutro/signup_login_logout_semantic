<!DOCTYPE html>
<html>
<head>
<title></title>
  <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="dist/semantic.min.js"></script>

  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">

  <script src="assets/library/jquery.min.js"></script>
  <script src="dist/components/form.js"></script>
  <script src="dist/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() 
    {
      $('.ui.form')
        .form({
          fields: {
            username: {
              identifier  : 'username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Masukan username anda'
                },
              ]
            },

            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Masukan Email Anda'
                },
                {
                  type   : 'email',
                  prompt : 'Masukan email Anda Dengan Benar'
                }
              ]
            },

            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Masukan Password Anda'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Masukan Password anda minimal 6 karakter'
                }
              ]
            },

            nama: {
              identifier  : 'nama',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'masukan nama lengkap anda'
                },
              ]
            },

            alamat: {
              identifier  : 'alamat',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'masukan nama alamat anda'
                },
              ]
            },

            usia: {
              identifier  : 'usia',
              rules: [
                {
                  type   : 'integer',
                  prompt : 'masukan usia anda'
                },
                {
                  type    : 'maxLength[2]',
                  prompt  : 'masukan usia anda dengan angka'
                }
              ]
            },

            jeniskelamin: {
              identifier  : 'jeniskelamin',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'masukan (pria/wanita)'
                },
              ]
            },

            agama: {
              identifier  : 'agama',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Agama Anda'
                },
                {
                  type   : 'not[number]',
                  prompt : 'Isikan Agama Anda Dengan Benar'
                }
              ]
            },

            pekerjaan: {
              identifier  : 'pekerjaan',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'masukan pekerjaan anda'
                },
              ]
            },

            hakakses: {
              identifier  : 'hakakses',
              rules :[
                {
                  type    : 'empty',
                  prompt  : 'Isikan (administrator/Pengunjung)'
                }
              ]
            }
          

          }
        }
      )
      ;
    }
  )
;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid" style="margin-top: 60px">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="gambar/koala.jpg" class="image">
      <div class="content">
        Daftar Member Baru
      </div>
    </h2>
    <form class="ui large form" action="daftar.php" method="post">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="add user icon"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="mail icon"></i>
            <input type="text" name="email" placeholder="Alamat Email">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="nama" placeholder="Nama Lengkap">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="home icon"></i>
            <input type="text" name="alamat" placeholder="Alamat Lengkap">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="child icon"></i>
            <input type="text" name="usia" maxlength="2" placeholder="Usia">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="users icon"></i>
            <input type="text" name="jeniskelamin" placeholder="Jenis Kelamin">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="angellist icon"></i>
            <input type="text" name="agama" placeholder="Agama">
          </div>
        </div>
        
        <div class="field">
          <div class="ui left icon input">
            <i class="sitemap icon"></i>
            <input type="text" name="pekerjaan" placeholder="Pekerjaan">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="privacy icon"></i>
            <input type="text" name="hakakses" placeholder="Hak Akses">
          </div>
        </div>

        <div class="ui fluid large teal submit button">Daftar</div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Sudah Punya Akun? <a href="/semantic/login.php">Login Sekarang</a>
    </div>
  </div>
</div>

</body>

</html>
