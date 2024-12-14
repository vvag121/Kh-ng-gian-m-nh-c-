<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../css/content.css">
</head>
<body>
    <?php 
        session_start();
        include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/bo/searchHandle.php");
        $titleSong = array("nameSong", "nameSinger", "nameComposer", "imageSinger", "srcSong", "numLike", "numComment", "numDownload");
    ?>
    
    <div class="container">
        <!-- Search Bar -->
        <form action="../model/bo/searchHandle.php" method="post">
            <div class="taskbar">
                <a href="./content.php"><img src="../../../res/icon/logo03.png" alt="Home" class="logo"></a>
                <input type="text" name="txtSearch" placeholder="Search" class="textSearch" required>
                <input type="submit" name="btnSearch" class="btnSearch" value="Search">
                <a href="./login.php"><img src="../../../res/icon/user.png" class="user" alt="User" title="<?php echo $_SESSION['state'] ?>"></a>
                <label class="name"><?php echo $_SESSION['user'] ?></label>
            </div>
        </form>

        <!-- Song List -->
        <div class="content">
            <form method="POST">
                <table>
                    <tr>
                        <?php foreach($songList as $index => $data): ?>
                            <td>
                                <div class="songBox">
                                    <img src="../../../res/icon/like.png" class="icon like" title="Like: <?php echo $data['numLike'] ?>">
                                    <img src="../../../res/icon/comment.png" class="icon comment" title="Comment: <?php echo $data['numComment'] ?>">
                                    <img src="../../../res/icon/download.png" class="icon download" title="Download: <?php echo $data['numDownload'] ?>">
                                    <img src="../../../res/singer/<?php echo $data['imageSinger'] ?>" class="avatar" alt="Singer">
                                    <a href="./content.php?bh=<?php echo $data['srcSong'] ?>" class="showAudio">
                                        <h1 title="Composer: <?php echo $data['nameComposer'] ?>"><?php echo $data['nameSong'] ?></h1>
                                    </a>
                                    <h3><?php echo $data['nameSinger'] ?></h3>
                                </div>
                            </td>
                            <?php if (($index + 1) % 4 == 0): ?>
                                </tr><tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
                </table>
            </form>

            <!-- Audio Player -->
            <?php if (isset($_GET['bh'])): ?>
                <form class="play">
                    <audio controls autoplay>
                        <source src="../../../res/audio/<?php echo $_GET['bh']; ?>.mp3" type="audio/ogg">
                    </audio>
                </form>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
