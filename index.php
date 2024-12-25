<?php get_header(); ?>

<main>
    <section class="content">
        <div class="text">
            <h2><?php _e('WIFITE', 'kali-linux-theme'); ?></h2>
            <p><?php _e('  Wifite — это автоматизированный инструмент для беспроводных атак.

                    Wifite был разработан для использования с дистрибутивами Linux для пентестинга, такими как Kali Linux , Pentoo , BackBox ; любые дистрибутивы Linux с беспроводными драйверами, пропатченными для инъекций. Скрипт, похоже, также работает с Ubuntu 11/10, Debian 6 и Fedora 16.
                    
                    Wifite должен быть запущен как root . Это требуется для набора программ, которые он использует. Запуск загруженных скриптов как root — плохая идея. Я рекомендую использовать загрузочный Live CD Kali Linux, загрузочный USB-накопитель (для постоянного использования) или виртуальную машину. Обратите внимание, что виртуальные машины не могут напрямую получать доступ к оборудованию, поэтому потребуется беспроводной USB-ключ.
                    
                    Wifite предполагает, что у вас есть беспроводная карта и соответствующие драйверы, пропатченные для инъекций и режима неразборчивого соединения/мониторинга.  ', 'kali-linux-theme'); ?></p>
        </div>
        <div class="terminal">
            <pre>
root@kali:~# wifite --pow 50 --wps
WiFite v2 (r85)
automated wireless auditor
designed for Linux
[+] targeting WPS-enabled networks
[+] scanning for wireless devices...
[+] enabling monitor mode on wlan0... done
[+] initializing scan (mon0), updates at 5 sec intervals, CTRL+C when ready.
            </pre>
        </div>
    </section>
    <section class="gallery">
        <h2><?php _e('Gallery', 'kali-linux-theme'); ?></h2>
        <div class="gallery-container">
            <?php for ($i = 0; $i < 6; $i++): ?>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-2022.1-release.jpg" alt="Kali Image <?php echo $i + 1; ?>">
                </div>
            <?php endfor; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
