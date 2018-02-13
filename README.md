# CsrfToken
Csrf Token Generator
1.Birbaşa Token istifadə üsulu (daha çox GET methodu zamanı lazım ola bilər)
<a href="/logout?_token=<?=CsrfToken::generateToken('logout')?>"Çıxış </a>

2.Form Daxilində

< form action="" method="post">
  
  < ? php CsrfToken::csrfField();  ?>

< /form>


3.Yoxlamaq ümün:
CsrfToken::csrfCheck($_GET['_token']);
