<header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="flex items-center">
                <div 
                    class="self-end select-none relative"
                    style="
                        background-image:url(<?= IMG.'/profile-behind2.jpeg'?>); 
                        background-repeat:no-repeat;
                        background-size:100%;
                        background-position:center;
                    "
                >
                    <img 
                        src="<?= IMG."/profile.png"?>" 
                        alt="<?= $this->app->data()->header->name;?>" 
                        srcset=""
                        class="w-[150px] min-w-[150px] md:w-[212px] md:min-w-[212px] "
                        draggable="false" 
                    />
                </div>
                <div class="flex flex-col justify-start items-start md:items-center md:flex-row ms-4 md:ms-10 ">
                    <div class="md:min-w-[180px] lg:min-w-[260px]">
                        <div class="text-xl md:text-3xl uppercase">
                            <span class="block font-thin"><?= split_name($this->app->data()->header->name)[0];?></span>
                            <span class="font-medium"><?= split_name($this->app->data()->header->name)[1];?></span>
                        </div>
                        <div class="mt-3 text-xs font-light">
                            <?= $this->app->data()->header->title;?>
                        </div>
                        <?= button([
                            "text" => "Follow",
                            "class" => "rounded-full !px-12 hidden md:block mt-3",
                            "onclick" => "window.open('{$this->app->data()->header->following_url}','_blank')",
                        ]);?>
                    </div>
                    <table class="border-gray-200 mt-3 border-0 md:mt-0 md:border-l">
                        <tbody class="text-[11px] md:text-xs">
                            <tr>
                                <td class="ps-0 md:ps-8 py-0.5 md:py-1.5 uppercase font-light text-grey-600 ">College</td>
                                <td class="ps-6 md:ps-10 py-0.5 md:py-1.5  font-medium text-grey-900"><?= $this->app->data()->header->college;?></td>
                            </tr>
                            <tr>
                                <td class="ps-0 md:ps-8 py-0.5 md:py-1.5 uppercase font-light text-grey-600 ">Graduated</td>
                                <td class="ps-6 md:ps-10 py-0.5 md:py-1.5 font-medium text-grey-900"><?= $this->app->data()->header->graduated;?></td>
                            </tr>
                            <tr>
                                <td class="ps-0 md:ps-8 py-0.5 md:py-1.5 uppercase font-light text-grey-600 ">Residence</td>
                                <td class="ps-6 md:ps-10 py-0.5 md:py-1.5 font-medium text-grey-900"><?= $this->app->data()->header->resideence;?></td>
                            </tr>
                            <tr>
                                <td class="ps-0 md:ps-8 py-0.5 md:py-1.5 uppercase font-light text-grey-600 ">Birthplace</td>
                                <td class="ps-6 md:ps-10 py-0.5 md:py-1.5 font-medium text-grey-900"><?= $this->app->data()->header->birth_place;?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?= button([
                        "text" => "Follow",
                        "class" => "rounded-full !px-12 block md:hidden mt-3"
                    ]);?>
                </div>
            </div>
            <div class="flex mt-5 w-[100%] lg:w-[initial] lg:ms-20 md:ms-6">
                <div class="flex flex-col overflow-hidden border-gray-200 border rounded-xl bg-gray-100 w-full">
                    <div class="text-center uppercase bg-gray-700 text-white text-xs p-1">Stats</div>
                    <div class="flex items-center justify-between py-1.5 px-2">
                        <div class="flex flex-col items-center justify-center px-4">
                            <span class="font-light text-[11px] uppercase">HTS</span>
                            <span class="font-semibold text-2xl"><?= $this->app->data()->header->stat_hts;?></span>
                        </div>
                        <div class="flex flex-col items-center justify-center px-4">
                            <span class="font-light text-[11px] uppercase">WTS</span>
                            <span class="font-semibold text-2xl"><?= $this->app->data()->header->stat_wts;?></span>
                        </div>
                        <div class="flex flex-col items-center justify-center px-4">
                            <span class="font-light text-[11px] uppercase">AST</span>
                            <span class="font-semibold text-2xl"><?= $this->app->data()->header->stat_ast;?></span>
                        </div>
                        <div class="flex flex-col items-center justify-center px-4">
                            <span class="font-light text-[11px] uppercase">FG% </span>
                            <span class="font-semibold text-2xl"><?= $this->app->data()->header->stat_fg;?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</header>