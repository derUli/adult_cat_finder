<?php

class AdultCatFinder extends MainClass
{

    const MODULE_NAME = "adult_cat_finder";

    public function frontendFooter()
    {
        if (is_desktop()) {
            echo Template::executeModuleTemplate(self::MODULE_NAME, "cat.php");
        }
    }
}