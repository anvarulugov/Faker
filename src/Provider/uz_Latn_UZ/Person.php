<?php

namespace Faker\Provider\ru_RU;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}} {{middleNameMale}}',
    ];

    /**
     * That list of MALE last names could be safely extended to FEMALE list just by adding 'a' letter at the end
     */
    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}а',
        '{{lastName}}а {{firstNameFemale}} {{middleNameFemale}}',
    ];

    /**
     * Common uzbek male names
     */
    protected static $firstNameMale = [
        "Abdulla", "Abdulloh", "Abdumalik", "Abdurahmon", "Abduraim", "Abdusamad", "Ahror", "Akramjon", "Alisher", "Azamat", "Azizullo", "Bahodir", "Bahrom", "Baxodir", "Baxtiyor", "Begzod", "Behruz", "Behzod", "Bekzod", "Botir", "Bunyod", "Davlat", "Davron", "Dilmurod", "Dilshod", "Doston", "Fahriddin", "Farhod", "Farruh", "Fayzulla", "Fayzullo", "Feruz", "Firdavs", "Firdavsbek", "Fozil", "Foziljon", "Furqat", "G'ayrat", "G'ofur", "G'ulom", "Husan", "Husniddin", "Ibrohim", "Ikrom", "Iqboljon", "Islom", "Jahon", "Jahongir", "Jaloliddin", "Jamol", "Jamshid", "Jasur", "Javlonbek", "Kamoliddin", "Mavlon", "Mirkomil", "Mirmuhsin", "Muhammad", "Muhibullo", "Muhiddin", "Muhsin", "Murod", "Muzaffar", "Naim", "Navruz", "Nodirjon", "Nuriddin", "Nuruddin", "Nurullo", "Obid", "Odil", "Olimjon", "Omonullo", "Orif", "Otabek", "Oybek", "O‘tkir", "Qambar", "Qayum", "Qobiljon", "Qodir", "Qosim", "Qudrat", "Qudratillo", "Rahimjon", "Rahmatullo", "Rasul", "Rasuljon", "Ravshanbek", "Rustam", "Ruzimurod", "Saidakbar", "Saidazim", "Salohiddin", "Samariddin", "Sanjar", "Sardor", "Sarvar", "Shavkat", "Shavkatbek", "Shayxiddin", "Sherali", "Sherzod", "Shoxruh", "Shuhrat", "Shukur", "Sobir", "Sunnatullo", "To'lqin", "Tohirbek", "Tojiddin", "Ubaydullo", "Ulug'bek", "Umid", "Xalil", "Xalim", "Xojiakbar", "Xursand", "Xusniddin", "Xusrav", "Yo'ldosh", "Zabihullo", "Zafarbek", "Zafarjon", "Zamoniddin", "Zayniddin", "Zohid", "Zoirjon", "Zokir", "Zulfiqor",
    ];

    /**
     * Common uzbek female names
     */
    protected static $firstNameFemale = [
        "Bahriniso", "Baxtigul", "Baxtiniso", "Begzoda", "Bibigul", "Dildora", "Dilfuza", "Dilnoza", "Dilrabo", "Dilshoda", "Farangiz", "Farruxa", "Farzona", "Fayzun", "Fazilat", "Feruza", "Feruzabonu", "Firuza", "Fotima", "Gulbadan", "Gulbahor", "Gulchehra", "Gulnora", "Gulnoza", "Gulsanam", "Gulshan", "Hadicha", "Jasmina", "Lobar", "Lola", "Madina", "Mag'firat", "Mahbuba", "Mahina", "Malika", "Mamlakat", "Marjona", "Mavjuda", "Mavluda", "Mubina", "Munavvar", "Munira", "Munisa", "Munojat", "Murodjon", "Nafisa", "Najot", "Nargiza", "Nasiba", "Nazokat", "Nigina", "Nigora", "Nilufar", "Nodira", "Nozima", "Nurbibi", "Nuriddin", "Oisha", "Oygul", "Parvina", "Qaynora", "Qizlarnom", "Qudsia", "Ra'no", "Raqima", "Ravshan", "Ravshanoy", "Rayhon", "Rayhona", "Risolat", "Rizvongul", "Rushan", "Rushaniya", "Samarqand", "Sarvinoz", "Shabnam", "Shahlo", "Shahnoza", "Shahzoda", "Shamsiya", "Shaxlo", "Shaxzoda", "Shirin", "Shohida", "Shohista", "Shoirakhon", "Shokhida", "Shoxista", "Sitora", "Surayo", "Surayyo", "Suvayda", "Tahmina", "Tojikon", "Umida", "Vasila", "Xalima", "Xolida", "Xurshida", "Yulduz", "Zarina", "Zarnigor", "Zebiniso", "Zilola", "Ziyoda", "Zuhra", "Zuhriddin", "Zulayho", "Zulfiya", "Zulfizar",
    ];

    protected static $middleNameMale = [
        "Abdulla o'g'li", "Abdulloh o'g'li", "Abdumalik o'g'li", "Abdurahmon o'g'li", "Abduraim o'g'li", "Abdusamad o'g'li", "Ahror o'g'li", "Akramjon o'g'li", "Alisher o'g'li", "Azamat o'g'li", "Azizullo o'g'li", "Bahodir o'g'li", "Bahrom o'g'li", "Baxodir o'g'li", "Baxtiyor o'g'li", "Begzod o'g'li", "Behruz o'g'li", "Behzod o'g'li", "Bekzod o'g'li", "Botir o'g'li", "Bunyod o'g'li", "Davlat o'g'li", "Davron o'g'li", "Dilmurod o'g'li", "Dilshod o'g'li", "Doston o'g'li", "Fahriddin o'g'li", "Farhod o'g'li", "Farruh o'g'li", "Fayzulla o'g'li", "Fayzullo o'g'li", "Feruz o'g'li", "Firdavs o'g'li", "Firdavsbek o'g'li", "Fozil o'g'li", "Foziljon o'g'li", "Furqat o'g'li", "G'ayrat o'g'li", "G'ofur o'g'li", "G'ulom o'g'li", "Husan o'g'li", "Husniddin o'g'li", "Ibrohim o'g'li", "Ikrom o'g'li", "Iqboljon o'g'li", "Islom o'g'li", "Jahon o'g'li", "Jahongir o'g'li", "Jaloliddin o'g'li", "Jamol o'g'li", "Jamshid o'g'li", "Jasur o'g'li", "Javlonbek o'g'li", "Kamoliddin o'g'li", "Mavlon o'g'li", "Mirkomil o'g'li", "Mirmuhsin o'g'li", "Muhammad o'g'li", "Muhibullo o'g'li", "Muhiddin o'g'li", "Muhsin o'g'li", "Murod o'g'li", "Muzaffar o'g'li", "Naim o'g'li", "Navruz o'g'li", "Nodirjon o'g'li", "Nuriddin o'g'li", "Nuruddin o'g'li", "Nurullo o'g'li", "Obid o'g'li", "Odil o'g'li", "Olimjon o'g'li", "Omonullo o'g'li", "Orif o'g'li", "Otabek o'g'li", "Oybek o'g'li", "O‘tkir o'g'li", "Qambar o'g'li", "Qayum o'g'li", "Qobiljon o'g'li", "Qodir o'g'li", "Qosim o'g'li", "Qudrat o'g'li", "Qudratillo o'g'li", "Rahimjon o'g'li", "Rahmatullo o'g'li", "Rasul o'g'li", "Rasuljon o'g'li", "Ravshanbek o'g'li", "Rustam o'g'li", "Ruzimurod o'g'li", "Saidakbar o'g'li", "Saidazim o'g'li", "Salohiddin o'g'li", "Samariddin o'g'li", "Sanjar o'g'li", "Sardor o'g'li", "Sarvar o'g'li", "Shavkat o'g'li", "Shavkatbek o'g'li", "Shayxiddin o'g'li", "Sherali o'g'li", "Sherzod o'g'li", "Shoxruh o'g'li", "Shuhrat o'g'li", "Shukur o'g'li", "Sobir o'g'li", "Sunnatullo o'g'li", "To'lqin o'g'li", "Tohirbek o'g'li", "Tojiddin o'g'li", "Ubaydullo o'g'li", "Ulug'bek o'g'li", "Umid o'g'li", "Xalil o'g'li", "Xalim o'g'li", "Xojiakbar o'g'li", "Xursand o'g'li", "Xusniddin o'g'li", "Xusrav o'g'li", "Yo'ldosh o'g'li", "Zabihullo o'g'li", "Zafarbek o'g'li", "Zafarjon o'g'li", "Zamoniddin o'g'li", "Zayniddin o'g'li", "Zohid o'g'li", "Zoirjon o'g'li", "Zokir o'g'li", "Zulfiqor o'g'li",
    ];

    protected static $middleNameFemale = [
        "Abdulla qizi", "Abdulloh qizi", "Abdumalik qizi", "Abdurahmon qizi", "Abduraim qizi", "Abdusamad qizi", "Ahror qizi", "Akramjon qizi", "Alisher qizi", "Azamat qizi", "Azizullo qizi", "Bahodir qizi", "Bahrom qizi", "Baxodir qizi", "Baxtiyor qizi", "Begzod qizi", "Behruz qizi", "Behzod qizi", "Bekzod qizi", "Botir qizi", "Bunyod qizi", "Davlat qizi", "Davron qizi", "Dilmurod qizi", "Dilshod qizi", "Doston qizi", "Fahriddin qizi", "Farhod qizi", "Farruh qizi", "Fayzulla qizi", "Fayzullo qizi", "Feruz qizi", "Firdavs qizi", "Firdavsbek qizi", "Fozil qizi", "Foziljon qizi", "Furqat qizi", "G'ayrat qizi", "G'ofur qizi", "G'ulom qizi", "Husan qizi", "Husniddin qizi", "Ibrohim qizi", "Ikrom qizi", "Iqboljon qizi", "Islom qizi", "Jahon qizi", "Jahongir qizi", "Jaloliddin qizi", "Jamol qizi", "Jamshid qizi", "Jasur qizi", "Javlonbek qizi", "Kamoliddin qizi", "Mavlon qizi", "Mirkomil qizi", "Mirmuhsin qizi", "Muhammad qizi", "Muhibullo qizi", "Muhiddin qizi", "Muhsin qizi", "Murod qizi", "Muzaffar qizi", "Naim qizi", "Navruz qizi", "Nodirjon qizi", "Nuriddin qizi", "Nuruddin qizi", "Nurullo qizi", "Obid qizi", "Odil qizi", "Olimjon qizi", "Omonullo qizi", "Orif qizi", "Otabek qizi", "Oybek qizi", "O‘tkir qizi", "Qambar qizi", "Qayum qizi", "Qobiljon qizi", "Qodir qizi", "Qosim qizi", "Qudrat qizi", "Qudratillo qizi", "Rahimjon qizi", "Rahmatullo qizi", "Rasul qizi", "Rasuljon qizi", "Ravshanbek qizi", "Rustam qizi", "Ruzimurod qizi", "Saidakbar qizi", "Saidazim qizi", "Salohiddin qizi", "Samariddin qizi", "Sanjar qizi", "Sardor qizi", "Sarvar qizi", "Shavkat qizi", "Shavkatbek qizi", "Shayxiddin qizi", "Sherali qizi", "Sherzod qizi", "Shoxruh qizi", "Shuhrat qizi", "Shukur qizi", "Sobir qizi", "Sunnatullo qizi", "To'lqin qizi", "Tohirbek qizi", "Tojiddin qizi", "Ubaydullo qizi", "Ulug'bek qizi", "Umid qizi", "Xalil qizi", "Xalim qizi", "Xojiakbar qizi", "Xursand qizi", "Xusniddin qizi", "Xusrav qizi", "Yo'ldosh qizi", "Zabihullo qizi", "Zafarbek qizi", "Zafarjon qizi", "Zamoniddin qizi", "Zayniddin qizi", "Zohid qizi", "Zoirjon qizi", "Zokir qizi", "Zulfiqor qizi",
    ];

    /**
     * Lastnames generated using first names of uzbek male names
     */
    protected static $lastName = [
        "Abdullayev", "Abdullohov", "Abdumalikov", "Abdurahmonov", "Abduraimov", "Abdusamadov", "Ahrorov", "Akramjonov", "Alisherov", "Azamatov", "Azizulloyev", "Bahodirov", "Bahromov", "Baxodirov", "Baxtiyorov", "Begzodov", "Behruzov", "Behzodov", "Bekzodov", "Botirov", "Bunyodov", "Davlatov", "Davronov", "Dilmurodov", "Dilshodov", "Dostonov", "Fahriddinov", "Farhodov", "Farruhov", "Fayzullayev", "Fayzulloyev", "Feruzov", "Firdavsov", "Firdavsbekov", "Fozilov", "Foziljonov", "Furqatov", "G'ayratov", "G'ofurov", "G'ulomov", "Husanov", "Husniddinov", "Ibrohimov", "Ikromov", "Iqboljonov", "Islomov", "Jahonov", "Jahongirov", "Jaloliddinov", "Jamolov", "Jamshidov", "Jasurov", "Javlonbekov", "Kamoliddinov", "Mavlonov", "Mirkomilov", "Mirmuhsinov", "Muhammadov", "Muhibulloyev", "Muhiddinov", "Muhsinov", "Murodov", "Muzaffarov", "Naimov", "Navruzov", "Nodirjonov", "Nuriddinov", "Nuruddinov", "Nurulloyev", "Obidov", "Odilov", "Olimjonov", "Omonulloyev", "Orifov", "Otabekov", "Oybekov", "O‘tkirov", "Qambarov", "Qayumov", "Qobiljonov", "Qodirov", "Qosimov", "Qudratov", "Qudratilloyev", "Rahimjonov", "Rahmatulloyev", "Rasulov", "Rasuljonov", "Ravshanbekov", "Rustamov", "Ruzimurodov", "Saidakbarov", "Saidazimov", "Salohiddinov", "Samariddinov", "Sanjarov", "Sardorov", "Sarvarov", "Shavkatov", "Shavkatbekov", "Shayxiddinov", "Sheraliyev", "Sherzodov", "Shoxruhov", "Shuhratov", "Shukurov", "Sobirov", "Sunnatulloyev", "To'lqinov", "Tohirbekov", "Tojiddinov", "Ubaydulloyev", "Ulug'bekov", "Umidov", "Xalilov", "Xalimov", "Xojiakbarov", "Xursandov", "Xusniddinov", "Xusravov", "Yo'ldoshov", "Zabihulloyev", "Zafarbekov", "Zafarjonov", "Zamoniddinov", "Zayniddinov", "Zohidov", "Zoirjonov", "Zokirov", "Zulfiqorov",
    ];

    protected static $lastNameSuffix = ['а', ''];

    /**
     * Return male middle name
     *
     * @example 'Иванович'
     *
     * @return string Middle name
     */
    public function middleNameMale()
    {
        return static::randomElement(static::$middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @example 'Anvar qizi'
     *
     * @return string Middle name
     */
    public function middleNameFemale()
    {
        return static::randomElement(static::$middleNameFemale);
    }

    /**
     * Return middle name for the specified gender.
     *
     * @param string|null $gender A gender the middle name should be generated
     *                            for. If the argument is skipped a random gender will be used.
     *
     * @return string Middle name
     */
    public function middleName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return $this->middleNameMale();
        }

        if ($gender === static::GENDER_FEMALE) {
            return $this->middleNameFemale();
        }

        return $this->middleName(static::randomElement([
            static::GENDER_MALE,
            static::GENDER_FEMALE,
        ]));
    }

    /**
     * Return last name for the specified gender.
     *
     * @param string|null $gender A gender of the last name should be generated
     *                            for. If the argument is skipped a random gender will be used.
     *
     * @return string Last name
     */
    public function lastName($gender = null)
    {
        $lastName = static::randomElement(static::$lastName);

        if (static::GENDER_FEMALE === $gender) {
            return $lastName . 'а';
        }

        if (static::GENDER_MALE === $gender) {
            return $lastName;
        }

        return $lastName . static::randomElement(static::$lastNameSuffix);
    }
}
