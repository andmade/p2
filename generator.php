<?php

$wordlist = [
    "we", "the", "people", "in", "order", "to", "form", "a", "more", "perfect", "union", "establish", "justice", "ensure", "domestic", "tranquility", "provide", "for", "common", "defense", "promote", "general", "welfare", "and", "blessings", "of", "liberty", "ourselves", "our", "posterity", "do", "ordain", "this", "Constitution", "United", "States", "America",
  ];

#Word Lists

$foolList = [
    "Orpheus",
    "Slime",
    "Legion",
    "BlackFrost",
    "Ose",
    "Decarabia",
    "Loki",
    "Susano-o",
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

$aeonList = [
    "Uriel",
    "Nidhoggr",
    "Ananta",
    "Atavaka",
    "Metatron",
];

$arcanaList = [
    "fool" => $foolList,
    "magician" => $magicianList,
    "priestess" => $priestessList,
    "empress" => $empressList,
    "emperor" => $emperorList,
    "hierophant" => $hierophantList,
];


$wordlistLength = count($wordlist);
$passwordGenerated = [];

$passwordLength = 0;
if (isset($_POST["passwordLength"])) {
    $passwordLength = $_POST["passwordLength"];

    echo '<pre>';
    echo htmlspecialchars(print_r($_POST["arcana"], true));
    echo '</pre>';


    for($i = 1; $i <= $passwordLength; $i++) {
        $passwordGenerated[] = $wordlist[mt_rand(0,$wordlistLength-1)];
    };
};