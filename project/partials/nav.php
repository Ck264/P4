<link rel="stylesheet" href="css/styles.css">
<?php
//we'll be including this on most/all pages so it's a good place to include anything else we want on those pages
require_once(__DIR__ . "/../lib/helpers.php");
?>
<nav>
    <ul class="nav">
    <li class="nav-item"><a class="nav-link" href="<?php echo getURL('home.php'); ?>">Home</a></li>
        <?php if (!is_logged_in()): ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo getURL('login.php'); ?>">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo getURL('register.php'); ?>">Register</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        <?php endif; ?>
        <?php /*if (has_role("Admin")): ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo getURL('test_create_accounts.php'); ?>">Create Account</a>
                            <a class="dropdown-item" href="<?php echo getURL('test_list_accounts.php'); ?>">View Account</a>
                            <a class="dropdown-item" href="<?php echo getURL('test_create_transactions.php'); ?>">Create Transaction</a>
                            <a class="dropdown-item" href="<?php echo getURL('test_list_transactions.php'); ?>">View Transactions</a>
                        </div>
                    </li>
        <?php endif; */?>

        <?php if (is_logged_in()): ?>
            <li><a href="https://ytmp3.cc/enc9b6acqp/">Conversion to MP3/Mp4</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php endif; ?>
    </ul>
</nav>
<!--Developer:Chirag Kumar, IS117-004, Spring2022->