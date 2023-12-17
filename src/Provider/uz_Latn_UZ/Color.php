<?php

namespace Faker\Provider\uz_Latn_UZ;

class Color extends \Faker\Provider\Color
{
    protected static $safeColorNames = [
        "oq", "qora", "qizil", "yashil", "ko'k", "sariq", "pushti", "binafsha", "malla", "kulrang",
    ];

    protected static $allColorNames = [
        "och yashil", "to'q yashil", "och qizil", "to'q qizil", "och ko'k", "to'q ko'k", "och sariq", "to'q sariq", "och malla", "to'q malla"
    ];
}
