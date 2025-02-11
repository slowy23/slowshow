<footer class="bg-white text-gray-900 p-6 rounded-2xl ">
    <div class="flex flex-column md:flex-row justify-start items-center">
        <div class="logo">
            <a href="<?= base_url();?>">
                <img class="w-14" src="<?= IMG."/logo.png";?>" alt="<?= $this->app->data()->bio->name;?>"/>
            </a>
        </div>
        <div class="ms-5">
            <div class="flex space-x-4">

                <?php if($this->app->data()->social->facebook !== ""):?>
                    <a href="<?= $this->app->data()->social->facebook;?>" class="hover:text-ao-blue font-semibold">Facebook</a>
                <?php endif;?>

                <?php if($this->app->data()->social->instagram !== ""):?>
                    <a href="<?= $this->app->data()->social->instagram;?>" class="hover:text-ao-blue font-semibold">Instagram</a>
                <?php endif;?>

                <?php if($this->app->data()->social->linkedin !== ""):?>
                    <a href="<?= $this->app->data()->social->linkedin;?>" class="hover:text-ao-blue font-semibold">LinkedIn</a>
                <?php endif;?>

                <?php if($this->app->data()->social->twitter !== ""):?>
                    <a href="<?= $this->app->data()->social->twitter;?>" class="hover:text-ao-blue font-semibold">Twitter</a>
                <?php endif;?>
            </div>
            <p class="mt-1.5 text-xs text-gray-500">
                &copy; <?= date("Y");?> <?= $this->app->data()->bio->name;?>. All rights reserved.
            </p>
        </div>
    </div>
</footer>