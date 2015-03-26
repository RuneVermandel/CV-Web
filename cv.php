<!DOCTYPE html>
<head>
  <title>Rune Vermandel - Curriculum Vitae</title>
  <link rel="stylesheet" type="text/css" href="cascading.css">
  <meta name="keywords" content="C++, Cpp, C, Objective-C, Java, PHP, HTML, Software Engineer, Software Developer, Application Developer, Webdev, Web Developer, System Administrator, Sysadmin, Linux, BASH, Programmer, CV, Curriculum Vitae">
  <meta name="description" content="Rune Vermandel is a young guy from the region of Antwerp, in Belgium, passionate about programming in the C-family of programming languages, and some interest in learning more about web development and the administration of servers.">
  <meta name="author" content="Rune Vermandel">
</head>
<body>
  <?php
  switch ($_GET["lang"])
  {
    case "nl":
    //echo "PAGE NL";
    include("cont_nl.php");
    break;
    case "fr":
    //echo "PAGE FR";
    include("cont_fr.php");
    break;
    case "de":
    //echo "PAGE DE";
    include("cont_de.php");
    break;
    case "en":
    //echo "PAGE EN";
    include("cont_en.php");
    break;
    default:
    //echo "PAGE EN - Setting Default";
    include("cont_en.php");
    //include EN in all other cases of different lang detection
    break;
  }
  ?>
</body>
</html>
