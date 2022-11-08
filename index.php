<?php
define('access', 'index');
define('config', include_once("Class/Config.class.php"));
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'zh_CN';
function getDirContent($path)
{
    if (!is_dir($path)) {
        return "error";
    }
    $arr = array();
    $data = scandir($path);
    foreach ($data as $value) {
        if ($value != '.' && $value != '..') {
            $arr[] = $value;
        }
    }
    return $arr;
}
$data = getDirContent("Lang/");
include("Class/Lang.class.php");
?>
<html>

<head>
    <title><?php echo $_LANG['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/light.min.css" />
    <style>
        a {
            color: #000000;
        }

        a:hover {
            color: #03a9f4;
            text-decoration: none;
        }

        .a-select {
            color: #03a9f4;
        }

        .text-decoration {
            padding-bottom: 5px;
            border-bottom: 1px solid #000;
        }

        .text-decoration:hover {
            color: #03a9f4;
            border-bottom: 1px solid #03a9f4;
        }
    </style>
</head>

<body>
    <h3><?php echo $_LANG['info.1']; ?></h3>
    <p><?php echo $_LANG['info.2']; ?></p>
    <p style="text-decoration: line-through"><?php echo $_LANG['info.3']; ?></p>
    <p><?php echo $_LANG['info.4']; ?></p>
    <h3><?php echo $_LANG['info.5']; ?></h3>
    <h5><?php echo $_LANG['info.6']; ?></h5><code><?php echo config['web']['url'] ?>/get/@:name</code>
    <h5><?php echo $_LANG['info.7']; ?></h5><code><img src="<?php echo config['web']['url'] ?>/get/@:name" alt=":name" /></code>
    <h5><?php echo $_LANG['info.8']; ?></h5><code>![:name](<?php echo config['web']['url'] ?>/get/@:name)</code>
    <h3>eg:<img src="<?php echo config['web']['url'] ?>/get/@index" alt="Moe Count!" /></h3>
    <i><?php echo $_LANG['info.9']; ?></i>
    <details>
        <summary style="display: inline-block;">
            <h3 style="display: inline-block; cursor: pointer;" class="text-decoration"><?php echo $_LANG['info.10']; ?></h3>
        </summary>
        <p style="margin: 0;"><?php echo $_LANG['info.11']; ?></p>
        <h5>minecraft<sup style="color: red;">NEW</sup></h5>
        <img src="<?php echo config['web']['url'] ?>/get/@demo?theme=minecraft" alt="Minecraft" />
        <h5>asoul</h5>
        <img src="<?php echo config['web']['url'] ?>/get/@demo?theme=asoul" alt="Asoul" />
        <h5>moebooru</h5>
        <img src="<?php echo config['web']['url'] ?>/get/@demo?theme=moebooru" alt="Moebooru" />
        <h5>moebooru-h</h5>
        <img src="<?php echo config['web']['url'] ?>/get/@demo?theme=moebooru-h" alt="Moebooru-Hentai" />
        <h5>rule34</h5>
        <img src="<?php echo config['web']['url'] ?>/get/@demo?theme=rule34" alt="Rule34" />
        <h5>gelbooru</h5>
        <img src="<?php echo config['web']['url'] ?>/get/@demo?theme=gelbooru" alt="Gelbooru" />
        <h5>gelbooru-h</h5>
        <img src="<?php echo config['web']['url'] ?>/get/@demo?theme=gelbooru-h" alt="Gelbooru-Hentai" />
        <h5>Tohoku-Kiritan</h5>
        <img src="<?php echo config['web']['url'] ?>/get/@demo?theme=Tohoku-Kiritan" alt="Tohoku-Kiritan" />
    </details>
    <details>
        <summary style="display: inline-block;">
            <h3 style="display: inline-block; cursor: pointer;" class="text-decoration"><?php echo $_LANG['html.lang']; ?></h3>
        </summary>
        <?php
        foreach ($data as $key => $value) {
            $json_string = json_decode(file_get_contents('Lang/' . $value), true);
            if ($lang === $json_string['region']) {
                $Html_Class = "a-select";
            } else {
                $Html_Class = "a-noselect";
            }
            echo $key = '<p><a href="?lang=' . pathinfo($value, PATHINFO_FILENAME) . '" class="' . $Html_Class . '">' . $json_string['language'] . '</a></p>';
        }
        ?>
    </details>

    <p>
    <h3>Tool</h3>
    </p>
    <div class="tool"><code>https://count.kjchmc.cn/get/@</code><input id="name" type="text" placeholder=":name" style="display: inline-block; width: 80px; height: 1.4em; line-height: 1.4em; margin: 0 4px; vertical-align: middle;"><code>?theme=</code><select id="theme" style="display: inline-block; height: 1.6em; line-height: 1.6em; font-size: 14px; margin: 0 4px; padding: 0 4px; vertical-align: middle;">
            <option value="minecraft">minecraft</option>
            <option value="asoul">asoul</option>
            <option value="moebooru">moebooru</option>
            <option value="moebooru-h">moebooru-h</option>
            <option value="rule34">rule34</option>
            <option value="gelbooru">gelbooru</option>
            <option value="gelbooru-h">gelbooru-h</option>
            <option value="Tohoku-Kiritan">Tohoku-Kiritan</option>
        </select><button id="get" style="margin: 10px 0;" onclick="_evt_push(&quot;click&quot;, &quot;normal&quot;, &quot;get_counter&quot;)">Get</button><img id="result" style="display: block;">
        <script>
            var btn = document.getElementById('get'),
                img = document.getElementById('result')

            btn.addEventListener('click', function() {
                var name = document.getElementById('name'),
                    themeEl = document.getElementById('theme')
                var text = name.value ? name.value.trim() : ''
                var theme = themeEl.value || 'moebooru'
                if (!text) {
                    alert('Please input counter name.')
                    return
                }

                img.src = 'https://count.kjchmc.cn/get/@' + text + '?theme=' + theme
            })
        </script>
    </div>
</body>
</html>