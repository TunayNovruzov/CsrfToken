# CsrfToken
Csrf Token Generator
1.Birbaşa Token istifadə üsulu (daha çox GET methodu zamanı lazım ola bilər)
<a href="/logout?_token=<?=CsrfToken::generateToken('logout')?>"Çıxış </a>

2.Form Daxilində

< form action="" method="post">
  <?php CsrfToken::csrfField();  ?>
  < label for="content">İstifadəçi adı</label>
  < input type="text" class="form-control" placeholder="İstifadəçi adı" name="username">
  < label for="content">Şifrə</label>
  < input type="text" class="form-control" placeholder="Şifrə" name="password">
  < button type="submit" class="btn btn-primary">Yadda saxla</button>
< /form>


3.Yoxlamaq ümün:
CsrfToken::csrfCheck($_GET['_token']);
