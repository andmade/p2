<?php

#Word Lists

$foolList = [
    "Orpheus",
    "Slime",
    "Legion",
    "BlackFrost",
    "Ose",
    "Decarabia",
    "Loki",
    "SusanoO",
    "OrpheusTelos",
];

$magicianList = [
    "Hermes",
    "Trismegistus",
    "Nekomata",
    "JackFrost",
    "PyroJack",
    "HuaPo",
    "Sati",
    "Orobas",
    "Rangda",
    "Surt",
];

$priestessList = [
  "Lucia",
    "Juno",
    "Asparas",
    "Unicorn",
    "HighPixie",
    "Sarasvati",
    "Ganga",
    "Parvati",
    "KikuriHime",
    "Scathach",
];

$empressList = [
    "Penthesilea",
    "Artemisia",
    "LeananSidhe",
    "Yaksini",
    "Lakshmi",
    "Hariti",
    "Gabriel",
    "MotherHarlot",
    "Skadi",
    "Alilat",
];

$emperorList = [
    "Polydeuces",
    "Caesar",
    "Forneus",
    "Oberon",
    "TakeMikazuchi",
    "KingFrost",
    "RajaNaga",
    "Kingu",
    "Barong",
    "Odin",
];

$hierophantList = [
    "Castor",
    "Omoikane",
    "Berith",
    "Shiisaa",
    "Flauros",
    "Thoth",
    "HoKutoSeikun",
    "Daisoujou",
    "Kohryu",
];

$loversList = [
    "Io",
    "Isis",
    "Pixie",
    "Alp",
    "TamLin",
    "Narcissus",
    "QueenMab",
    "SakiMitama",
    "Titania",
    "Raphael",
    "Cybele",
];

$chariotList = [
    "Palladion",
    "Athena",
    "AraMitama",
    "Chimera",
    "Zouchouten",
    "Ares",
    "Oumitsunu",
    "NataTaishi",
    "Koumokuten",
];

$justiceList = [
    "Nemesis",
    "KalaNemi",
    "Angel",
    "Archangel",
    "Principality",
    "Power",
    "Virtue",
    "Dominion",
    "Throne",
    "Melchizedek",
];

$hermitList = [
    "YomotsuShikome",
    "Naga",
    "Lamia",
    "Mothman",
    "Taraka",
    "KuramaTengu",
    "Nebiros",
    "Kumbhanda",
    "Arahabaki",
];

$fortuneList = [
    "Fortuna",
    "Empusa",
    "KusiMitama",
    "Clotho",
    "Lachesis",
    "Atropos",
    "Norn",
];

$strengthList = [
    "Cerberus",
    "Valkyrie",
    "Rakshasa",
    "Titan",
    "Jikokuten",
    "Hanuman",
    "Narasimha",
    "Kali",
    "Siegfried",
];

$hangedList = [
    "Inugami",
    "TakeMinakata",
    "Orthrus",
    "Vasuki",
    "Ubelluris",
    "Hecatoncheires",
    "HellBiker",
    "Attis",
];

$deathList = [
    "Ghoul",
    "PaleRider",
    "Loa",
    "Samael",
    "Mot",
    "Alice",
    "Thanatos"
];

$temperanceList = [
    "NigiMitama",
    "Mithra",
    "Genbu",
    "Seiryuu",
    "Okuninushi",
    "Suzaku",
    "Byakko",
    "Yurlungur",
];

$devilList = [
    "Lilim",
    "Mokoi",
    "Vetala",
    "Incubus",
    "Succubus",
    "Pazuzu",
    "Lilith",
    "Abaddon",
    "Beelzebub",
];

$towerList = [
    "Elijor",
    "CuChulainn",
    "Bishamonten",
    "SeitenTaisei",
    "Masakado",
    "Mara",
    "Shiva",
    "ChiYou",
];

$starList = [
    "NekoShogun",
    "Setanta",
    "Nandi",
    "Kaiwan",
    "Ganesha",
    "Garuda",
    "Kartikeya",
    "Saturnus"
];

$moonList = [
    "Gurr",
    "YamatanoOrochi",
    "Girimehkala",
    "Dionysus",
    "Chernobog",
    "Seth",
    "BaalZebul",
    "Sandalphon"
];

$sunList = [
    "Yatagarasu",
    "Quetzalcoatl",
    "Jatayu",
    "Horus",
    "Suparna",
    "Vishnu",
    "Asura"
];
$judgeList = [
    "Anubis",
    "Trumpeter",
    "Michael",
    "Satan",
    "Lucifer",
    "Messiah",
];

$worldList = [
    "Uriel",
    "Nidhoggr",
    "Ananta",
    "Atavaka",
    "Metatron",
];

$arcanaList = [
    "Fool" => $foolList,
    "Magician" => $magicianList,
    "Priestess" => $priestessList,
    "Empress" => $empressList,
    "Emperor" => $emperorList,
    "Hierophant" => $hierophantList,
    "Lovers" => $loversList,
    "Chariot" => $chariotList,
    "Justice" => $justiceList,
    "Hermit" => $hermitList,
    "Fortune" => $fortuneList,
    "Strength" => $fortuneList,
    "Hanged" => $hangedList,
    "Death" => $deathList,
    "Temperance" => $temperanceList,
    "Devil" => $devilList,
    "Tower" => $towerList,
    "Star" => $starList,
    "Moon" => $moonList,
    "Sun" => $sunList,
    "Judgement" => $judgeList,
    "World" => $worldList,
];

$symbols = ["#","@","&", "*", "%"];

$passwordGenerated = [];
$numWordsErr = $noArcanaErr = "";

if (!empty($_POST["passwordLength"]) && (intval($_POST["passwordLength"]) < 6) && isset($_POST["arcana"])) {
    $passwordLength = $_POST["passwordLength"];
    
    for($i = 1; $i <= $passwordLength; $i++) {
        $currentArcana = $arcanaList[$_POST["arcana"][mt_rand(0, count($_POST["arcana"]) - 1)]];
        $passwordGenerated[] = $currentArcana[mt_rand(0,count($currentArcana)-1)];
    };
        
    if (isset($_POST["includeNumber"])) {
        $passwordGenerated[] = strval(mt_rand(0,9));
    }

    if (isset($_POST["includeSymbol"])) {
        $passwordGenerated[] = $symbols[(mt_rand(0,count($symbols)-1))];
    }
    
    shuffle($passwordGenerated);
    
}   

if (empty($_POST["passwordLength"]) && isset($_POST["passwordLength"])){
    $numWordsErr = "Please select a number 1-5";
}   

if (isset($_POST["passwordLength"]) && !(intval($_POST["passwordLength"]) < 6)) {
    $numWordsErr = "Please select a number 1-5";
}   

if (isset($_POST["passwordLength"]) && !isset($_POST["arcana"])){
    $noArcanaErr = "You must select at least 1 arcana";
}; 

