<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    <url>
        <loc><?php echo base_url();?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>1.0</priority>

        <!-- <changefreq>daily</changefreq> -->
    </url>


    <!-- Sitemap -->

    <?php foreach($language as $item) { ?>
        <url>
            <loc>
            <?php echo base_url()."home/set_language/".$item->name; ?></loc>
            <lastmod><?php echo date('c', time()); ?></lastmod>
            <priority>0.8</priority>

        </url>
    <?php } ?>

    <?php foreach($currency_settings as $item) { ?>
        <url>
            <loc>
            <?php echo base_url()."home/set_currency/".$item->currency_settings_id; ?></loc>
            <lastmod><?php echo date('c', time()); ?></lastmod>
            <priority>0.8</priority>

        </url>
    <?php } ?>
    <url>
        <loc><?php echo base_url()."home";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/listing";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/listing/premium_members";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/listing/free_members";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/plans";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/stories";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/contact_us";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/about_us";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/registration";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <?php foreach($happy_story as $item) { ?>
        <url>
            <loc>
            <?php echo base_url()."home/stories/story_detail/".$item->happy_story_id; ?></loc>
            <lastmod><?php echo date('c', time()); ?></lastmod>
            <priority>0.8</priority>

        </url>
    <?php } ?>
    <?php foreach($plan as $item) { ?>
        <url>
            <loc>
            <?php echo base_url()."home/plans/subscribe/".$item->plan_id; ?></loc>
            <lastmod><?php echo date('c', time()); ?></lastmod>
            <priority>0.8</priority>

        </url>
    <?php } ?>
    <url>
        <loc><?php echo base_url()."home/faq";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/terms_and_conditions";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/privacy_policy";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo base_url()."home/login";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.64</priority>
    </url>
    <?php foreach($member as $item) { ?>
        <url>
            <loc>
            <?php echo base_url()."home/member_profile/".$item->member_id; ?></loc>
            <lastmod><?php echo date('c', time()); ?></lastmod>
            <priority>0.64</priority>

        </url>
    <?php } ?>
    <url>
        <loc><?php echo base_url()."home/forget_pass";?></loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
        <priority>0.51</priority>
    </url>


</urlset>