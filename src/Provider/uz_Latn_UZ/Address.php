<?php

namespace Faker\Provider\uz_Latn_UZ;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = ['shahari'];

    protected static $regionSuffix = [''];
    protected static $streetPrefix = [
        'tor.k.', 'k.', 'muy.', 'shox k',
    ];

    protected static $buildingNumber = ['%#'];
    protected static $postcode = ['######'];

    /**
     * @see https://ru.wikipedia.org/wiki/Общероссийский_классификатор_стран_мира#Список_стран_согласно_Классификатору
     */
    protected static $country = [
        "Mamlakat", "Avstraliya", "Avstriya", "Albaniya", "Amerika Qoʻshma Shtatlari", "Angola", "Andorra", "Antigua va Barbuda", "Argentina", "Armaniston", "Afgʻoniston", "Bagama orollari", "Bangladesh", "Barbados", "Bahrayn", "Belorussiya", "Beliz", "Belgiya", "Benin", "Birlashgan Arab Amirliklari", "Bolgariya", "Boliviya", "Bosniya va Gertsegovina", "Botsvana", "Braziliya", "Bruney", "Burkina-Faso", "Burundi", "Butan", "Buyuk Britaniya", "Vanuatu", "Vatikan", "Vengriya", "Venesuela", "Vyetnam", "Gabon", "Gaiti", "Gayana", "Gambiya", "Gana", "Gvatemala", "Gvineya", "Gvineya-Bisau", "Germaniya", "Gonduras", "Grenada", "Gretsiya", "Gruziya", "Daniya", "Dominika", "Dominikan Respublikasi", "Jazoir", "Janubiy Afrika Respublikasi", "Janubiy Sudan", "Jibuti", "Zambiya", "Zimbabve", "Isroil", "Indoneziya", "Iordaniya", "Iroq", "Irlandiya", "Ispaniya", "Islandiya", "Italiya", "Kabo-Verde", "Kambodja", "Kamerun", "Kanada", "Keniya", "Kipr", "Kiribati", "Kolumbiya", "Komor orollari", "Kongo", "Kongo Demokratik Respublikasi", "Koreya Xalq Demokratik Respublikasi", "Koreya", "Kosta-Rika", "Kot-d'Ivuar", "Kuba", "Laos", "Latviya", "Lesoto", "Liberiya", "Livan", "Liviya", "Litva", "Lixtenshteyn", "Lyuksemburg", "Mavrikiy", "Mavritaniya", "Madagaskar", "Malavi", "Malayziya", "Mali", "Maldiv orollari", "Malta", "Markaziy Afrika Respublikasi", "Marokash", "Marshall orollari", "Meksika", "Mikroneziya Federativ Shtatlar", "Misr", "Mozambik", "Moldaviya", "Monako", "Myanma", "Namibiya", "Nauru", "Nepal", "Niger", "Nigeriya", "Niderlandiya", "Nikaragua", "Norvegiya", "Ozarbayjon", "Pokiston", "Palau", "Panama", "Papua Yangi Gvineya", "Paragvay", "Peru", "Polsha", "Portugaliya", "Rossiya", "Ruanda", "Ruminiya", "Salvador", "Samoa", "San-Marino", "San-Tome va Prinsipi", "Saudiya Arabistoni", "Seyshell orollari", "Senegal", "Sent-Vinsent va Grenadina", "Sent-Kits va Nevis", "Sent-Lyusiya", "Serbiya", "Singapur", "Suriya", "Slovakiya", "Sloveniya", "Solomon orollari", "Somali", "Sudan", "Surinam", "Syerra-Leone", "Tojikiston", "Tailand", "Tanzaniya", "Togo", "Tonga", "Trinidad va Tobago", "Tuvalu", "Tunis", "Turkmaniston", "Turkiya", "Uganda", "Ukraina", "Ummon", "Urugvay", "Fiji", "Filippin", "Finlandiya", "Fransiya", "Xitoy", "Xorvatiya", "Chad", "Chernogoriya", "Chexiya", "Chili", "Shveytsariya", "Shvetsiya", "Shri-Lanka", "Sharqiy Timor", "Shimoliy Makedoniya", "Ekvador", "Ekvatorial Gvineya", "Eritreya", "Eron", "Esvatini", "Estoniya", "Efiopiya", "Yamayka", "Yaman", "Yangi Zelandiya", "Yaponiya", "O‘zbekiston", "Qatar", "Qirgʻiziston", "Qozogʻiston", "Quvayt", "Hindiston",
    ];

    protected static $region = [
        "Andijon viloyati", "Buxoro viloyati", "Jizzax viloyati", "Qashqadaryo viloyati", "Navoiy viloyati", "Namangan viloyati", "Samarqand viloyati", "Surxondaryo viloyati", "Sirdaryo viloyati", "Toshkent viloyati", "Farg'ona viloyati", "Xorazm viloyati", "Qoraqalpog'iston Respublikasi",
    ];

    protected static $city = [
        "Andijon", "Xonobod", "Buxoro", "Kogon", "Jizzax", "Qarshi", "Shahrisabz", "Navoiy", "Zarafshon", "G'ozg'on", "Namangan", "Samarqand", "Kattaqo'rg'on", "Termiz", "Toshkent", "Guliston", "Shirin", "Yangiyer", "Nurafshon", "Olmaliq", "Angren", "Bekobod", "Ohangaron", "Chirchiq", "Yangiyo'l", "Farg'ona",
    ];

    protected static $street = [
        'Amir Temur', 'Alisher Navoiy', 'At-Termiziy', 'Al-Buxoriy', 'Usmon Nosir', 'Farobiy', 'Mustaqillik', 'Abdulla Qodiriy', 'Tesha Saydaliyev',
        'Muhammad Yusuf', 'Paxtakor', 'Chinobod', 'Muruvvat', 'Taraqqiyot', 'Nurafshon',
    ];

    protected static $addressFormats = [
        '{{postcode}}, {{region}} {{regionSuffix}}, {{cityPrefix}} {{city}}, {{streetPrefix}} {{street}}, {{buildingNumber}}',
    ];

    protected static $streetAddressFormats = [
        '{{streetPrefix}} {{street}}, {{buildingNumber}}',
    ];

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public static function country()
    {
        return static::randomElement(static::$country);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::$city);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
