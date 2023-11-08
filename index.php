<?php
    session_start();
    require_once "./vendor/autoload.php";
    require_once "./config/app.php";

    use App\Controllers\SubjectController;
    use App\Controllers\HomeController;
    $homePage = new HomeController();
    $subject = new SubjectController();

    $url = $_GET['url'] ?? '/';
    switch ($url){
        //HomePage
        case '/':
            $homePage->index();
            break;
        //Subject
        case 'subject/list':
            $subject -> index();
            break;
        case 'subject/insert':
            $subject -> add();
            break;
        case 'subject/save-add':
            $subject -> saveAdd();
            break;
        case 'subject/delete':
            $subject -> delete();
            break;
        case 'subject/deletes':
            $subject -> deletes();
            break;
        case 'subject/update':
            $subject -> update();
            break;
        case 'subject/save-update':
            $subject -> saveUpdate();
            break;
        default:
            echo "Đường dẫn không tồn tại";
            break;
    }

?>