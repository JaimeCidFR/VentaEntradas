<?php
include_once("../modelo/SocioModelo.php");
include_once("../modelo/ReservaModelo.php");
/* <img src="../img/mapaCarballeiraMesasZonas.jpg" /> */
function mapaMesas(){
    echo'
    <div class="parent"><!-- mapa y mesas -->
      <div class="plano">
        <img src="../img/mapaCarballeiraMesasZonas.jpg" />
        
        <div class="users">
          <div class="mesa m1 libre" data-mesa="1">
            1
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="1" data-mesa="1" hidden="hidden"></form>
          </div>
          <div class="mesa m2 libre" data-mesa="2">
            2
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="2" data-mesa="2" hidden="hidden"></form>
          </div>
          <div class="mesa m3 libre" data-mesa="3">
            3
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="3" data-mesa="3" hidden="hidden"></form>
          </div>
          <div class="mesa m4 libre" data-mesa="4">
            4
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="4" data-mesa="4" hidden="hidden"></form>
          </div>
          <div class="mesa m5 libre" data-mesa="5">
            5
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="5" data-mesa="5" hidden="hidden"></form>
          </div>
          <div class="mesa m6 libre" data-mesa="6">
            6
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="6" data-mesa="6" hidden="hidden"></form>
          </div>
          <div class="mesa m7 libre" data-mesa="7">
            7
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="7" data-mesa="7" hidden="hidden"></form>
          </div>
          <div class="mesa m8 libre" data-mesa="8">
            8
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="8" data-mesa="8" hidden="hidden"></form>
          </div>
          <div class="mesa m9 libre" data-mesa="9">
            9
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="9" data-mesa="9" hidden="hidden"></form>
          </div>
          <div class="mesa m10 libre" data-mesa="10">
            10
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="10" data-mesa="10" hidden="hidden"></form>
          </div>
          <div class="mesa m11 libre" data-mesa="11">
            11
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="11" data-mesa="11" hidden="hidden"></form>
          </div>
          <div class="mesa m12 libre" data-mesa="12">
            12
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="12" data-mesa="12" hidden="hidden"></form>
          </div>
          <div class="mesa m13 libre" data-mesa="13">
            13
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="13" data-mesa="13" hidden="hidden"></form>
          </div>
          <div class="mesa m14 libre" data-mesa="14">
            14
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="14" data-mesa="14" hidden="hidden"></form>
          </div>
          <div class="mesa m15 libre" data-mesa="15">
            15
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="15" data-mesa="15" hidden="hidden"></form>
          </div>
          <div class="mesa m16 libre" data-mesa="16">
            16
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="16" data-mesa="16" hidden="hidden"></form>
          </div>
          <div class="mesa m17 libre" data-mesa="17">
            17
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="17" data-mesa="17" hidden="hidden"></form>
          </div>
          <div class="mesa m18 libre" data-mesa="18">
            18
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="18" data-mesa="18" hidden="hidden"></form>
          </div>
          <div class="mesa m19 libre" data-mesa="19">
            19
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="19" data-mesa="19" hidden="hidden"></form>
          </div>
          <div class="mesa m20 libre" data-mesa="20">
            20
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="20" data-mesa="20" hidden="hidden"></form>
          </div>
          <div class="mesa m21 libre" data-mesa="21">
            21
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="21" data-mesa="21" hidden="hidden"></form>
          </div>
          <div class="mesa m22 libre" data-mesa="22">
            22
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="22" data-mesa="22" hidden="hidden"></form>
          </div>
          <div class="mesa m23 libre" data-mesa="23">
            23
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="23" data-mesa="23" hidden="hidden"></form>
          </div>
          <div class="mesa m24 libre" data-mesa="24">
            24
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="24" data-mesa="24" hidden="hidden"></form>
          </div>
          <div class="mesa m25 libre" data-mesa="25">
            25
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="25" data-mesa="25" hidden="hidden"></form>
          </div>
          <div class="mesa m26 libre" data-mesa="26">
            26
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="26" data-mesa="26" hidden="hidden"></form>
          </div>
          <div class="mesa m27 libre" data-mesa="27">
            27
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="27" data-mesa="27" hidden="hidden"></form>
          </div>
          <div class="mesa m28 libre" data-mesa="28">
            28
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="28" data-mesa="28" hidden="hidden"></form>
          </div>
          <div class="mesa m29 libre" data-mesa="29">
            29
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="29" data-mesa="29" hidden="hidden"></form>
          </div>
          <div class="mesa m30 libre" data-mesa="30">
            30
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="30" data-mesa="30" hidden="hidden"></form>
          </div>
          <div class="mesa m31 libre" data-mesa="31">
            31
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="31" data-mesa="31" hidden="hidden"></form>
          </div>
          <div class="mesa m32 libre" data-mesa="32">
            32
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="32" data-mesa="32" hidden="hidden"></form>
          </div>
          <div class="mesa m33 libre" data-mesa="33">
            33
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="33" data-mesa="33" hidden="hidden"></form>
          </div>
          <div class="mesa m34 libre" data-mesa="34">
            34
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="34" data-mesa="34" hidden="hidden"></form>
          </div>
          <div class="mesa m35 libre" data-mesa="35">
            35
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="35" data-mesa="35" hidden="hidden"></form>
          </div>
          <div class="mesa m36 libre" data-mesa="36">
            36
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="36" data-mesa="36" hidden="hidden"></form>
          </div>
          <div class="mesa m37 libre" data-mesa="37">
            37
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="37" data-mesa="37" hidden="hidden"></form>
          </div>
          <div class="mesa m38 libre" data-mesa="38">
            38
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="38" data-mesa="38" hidden="hidden"></form>
          </div>
          <div class="mesa m39 libre" data-mesa="39">
            39
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="39" data-mesa="39" hidden="hidden"></form>
          </div>
          <div class="mesa m40 libre" data-mesa="40">
            40
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="40" data-mesa="40" hidden="hidden"></form>
          </div>
          <div class="mesa m41 libre" data-mesa="41">
            41
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="41" data-mesa="41" hidden="hidden"></form>
          </div>
          <div class="mesa m42 libre" data-mesa="42">
            42
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="42" data-mesa="42" hidden="hidden"></form>
          </div>
          <div class="mesa m43 libre" data-mesa="43">
            43
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="43" data-mesa="43" hidden="hidden"></form>
          </div>
          <div class="mesa m44 libre" data-mesa="44">
            44
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="44" data-mesa="44" hidden="hidden"></form>
          </div>
          <div class="mesa m45 libre" data-mesa="45">
            45
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="45" data-mesa="45" hidden="hidden"></form>
          </div>
          <div class="mesa m46 libre" data-mesa="46">
            46
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="46" data-mesa="46" hidden="hidden"></form>
          </div>
          <div class="mesa m47 libre" data-mesa="47">
            47
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="47" data-mesa="47" hidden="hidden"></form>
          </div>
          <div class="mesa m48 libre" data-mesa="48">
            48
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="48" data-mesa="48" hidden="hidden"></form>
          </div>
          <div class="mesa m49 libre" data-mesa="49">
            49
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="49" data-mesa="49" hidden="hidden"></form>
          </div>
          <div class="mesa m50 libre" data-mesa="50">
            50
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="50" data-mesa="50" hidden="hidden"></form>
          </div>
          <div class="mesa m51 libre" data-mesa="51">
            51
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="51" data-mesa="51" hidden="hidden"></form>
          </div>
          <div class="mesa m52 libre" data-mesa="52">
            52
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="52" data-mesa="52" hidden="hidden"></form>
          </div>
          <div class="mesa m53 libre" data-mesa="53">
            53
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="53" data-mesa="53" hidden="hidden"></form>
          </div>
          <div class="mesa m54 libre" data-mesa="54">
            54
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="54" data-mesa="54" hidden="hidden"></form>
          </div>
          <div class="mesa m55 libre" data-mesa="55">
            55
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="55" data-mesa="55" hidden="hidden"></form>
          </div>
          <div class="mesa m56 libre" data-mesa="56">
            56
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="56" data-mesa="56" hidden="hidden"></form>
          </div>
          <div class="mesa m57 libre" data-mesa="57">
            57
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="57" data-mesa="57" hidden="hidden"></form>
          </div>
          <div class="mesa m58 libre" data-mesa="58">
            58
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="58" data-mesa="58" hidden="hidden"></form>
          </div>
          <div class="mesa m59 libre" data-mesa="59">
            59
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="59" data-mesa="59" hidden="hidden"></form>
          </div>
          <div class="mesa m60 libre" data-mesa="60">
            60
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="60" data-mesa="60" hidden="hidden"></form>
          </div>
          <div class="mesa m61 libre" data-mesa="61">
            61
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="61" data-mesa="61" hidden="hidden"></form>
          </div>
          <div class="mesa m62 libre" data-mesa="62">
            62
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="62" data-mesa="62" hidden="hidden"></form>
          </div>
          <div class="mesa m63 libre" data-mesa="63">
            63
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="63" data-mesa="63" hidden="hidden"></form>
          </div>
          <div class="mesa m64 libre" data-mesa="64">
            64
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="64" data-mesa="64" hidden="hidden"></form>
          </div>
          <div class="mesa m65 libre" data-mesa="65">
            65
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="65" data-mesa="65" hidden="hidden"></form>
          </div>
          <div class="mesa m66 libre" data-mesa="66">
            66
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="66" data-mesa="66" hidden="hidden"></form>
          </div>
          <div class="mesa m67 libre" data-mesa="67">
            67
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="67" data-mesa="67" hidden="hidden"></form>
          </div>
          <div class="mesa m68 libre" data-mesa="68">
            68
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="68" data-mesa="68" hidden="hidden"></form>
          </div>
          <div class="mesa m69 libre" data-mesa="69">
            69
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="69" data-mesa="69" hidden="hidden"></form>
          </div>
          <div class="mesa m70 libre" data-mesa="70">
            70
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="70" data-mesa="70" hidden="hidden"></form>
          </div>
          <div class="mesa m71 libre" data-mesa="71">
            71
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="71" data-mesa="71" hidden="hidden"></form>
          </div>
          <div class="mesa m72 libre" data-mesa="72">
            72
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="72" data-mesa="72" hidden="hidden"></form>
          </div>
          <div class="mesa m73 libre" data-mesa="73">
            73
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="73" data-mesa="73" hidden="hidden"></form>
          </div>
          <div class="mesa m74 libre" data-mesa="74">
            74
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="74" data-mesa="74" hidden="hidden"></form>
          </div>
          <div class="mesa m75 libre" data-mesa="75">
            75
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="75" data-mesa="75" hidden="hidden"></form>
          </div>
          <div class="mesa m76 libre" data-mesa="76">
            76
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="76" data-mesa="76" hidden="hidden"></form>
          </div>
          <div class="mesa m77 libre" data-mesa="77">
            77
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="77" data-mesa="77" hidden="hidden"></form>
          </div>
          <div class="mesa m78 libre" data-mesa="78">
            78
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="78" data-mesa="78" hidden="hidden"></form>
          </div>
          <div class="mesa m79 libre" data-mesa="79">
            79
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="79" data-mesa="79" hidden="hidden"></form>
          </div>
          <div class="mesa m80 libre" data-mesa="80">
            80
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="80" data-mesa="80" hidden="hidden"></form>
          </div>
          <div class="mesa m81 libre" data-mesa="81">
            81
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="81" data-mesa="81" hidden="hidden"></form>
          </div>
          <div class="mesa m82 libre" data-mesa="82">
            82
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="82" data-mesa="82" hidden="hidden"></form>
          </div>
          <div class="mesa m83 libre" data-mesa="83">
            83
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="83" data-mesa="83" hidden="hidden"></form>
          </div>
          <div class="mesa m84 libre" data-mesa="84">
            84
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="84" data-mesa="84" hidden="hidden"></form>
          </div>
          <div class="mesa m85 libre" data-mesa="85">
            85
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="85" data-mesa="85" hidden="hidden"></form>
          </div>
          <div class="mesa m86 libre" data-mesa="86">
            86
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="86" data-mesa="86" hidden="hidden"></form>
          </div>
          <div class="mesa m87 libre" data-mesa="87">
            87
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="87" data-mesa="87" hidden="hidden"></form>
          </div>
          <div class="mesa m88 libre" data-mesa="88">
            88
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="88" data-mesa="88" hidden="hidden"></form>
          </div>
          <div class="mesa m89 libre" data-mesa="89">
            89
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="89" data-mesa="89" hidden="hidden"></form>
          </div>
          <div class="mesa m90 libre" data-mesa="90">
            90
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="90" data-mesa="90" hidden="hidden"></form>
          </div>
          <div class="mesa m91 libre" data-mesa="91">
            91
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="91" data-mesa="91" hidden="hidden"></form>
          </div>
          <div class="mesa m92 libre" data-mesa="92">
            92
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="92" data-mesa="92" hidden="hidden"></form>
          </div>
          <div class="mesa m93 libre" data-mesa="93">
            93
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="93" data-mesa="93" hidden="hidden"></form>
          </div>
          <div class="mesa m94 libre" data-mesa="94">
            94
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="94" data-mesa="94" hidden="hidden"></form>
          </div>
          <div class="mesa m95 libre" data-mesa="95">
            95
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="95" data-mesa="95" hidden="hidden"></form>
          </div>
          <div class="mesa m96 libre" data-mesa="96">
            96
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="96" data-mesa="96" hidden="hidden"></form>
          </div>
          <div class="mesa m97 libre" data-mesa="97">
            97
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="97" data-mesa="97" hidden="hidden"></form>
          </div>
          <div class="mesa m98 libre" data-mesa="98">
            98
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="98" data-mesa="98" hidden="hidden"></form>
          </div>
          <div class="mesa m99 libre" data-mesa="99">
            99
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="99" data-mesa="99" hidden="hidden"></form>
          </div>
          <div class="mesa m100 libre" data-mesa="100">
            100
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="100" data-mesa="100" hidden="hidden"></form>
          </div>
          <div class="mesa m101 libre" data-mesa="101">
            101
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="101" data-mesa="101" hidden="hidden"></form>
          </div>
          <div class="mesa m102 libre" data-mesa="102">
            102
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="102" data-mesa="102" hidden="hidden"></form>
          </div>
          <div class="mesa m103 libre" data-mesa="103">
            103
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="103" data-mesa="103" hidden="hidden"></form>
          </div>
          <div class="mesa m104 libre" data-mesa="104">
            104
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="104" data-mesa="104" hidden="hidden"></form>
          </div>
          <div class="mesa m105 libre" data-mesa="105">
            105
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="105" data-mesa="105" hidden="hidden"></form>
          </div>
          <div class="mesa m106 libre" data-mesa="106">
            106
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="106" data-mesa="106" hidden="hidden"></form>
          </div>
          <div class="mesa m107 libre" data-mesa="107">
            107
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="107" data-mesa="107" hidden="hidden"></form>
          </div>
          <div class="mesa m108 libre" data-mesa="108">
            108
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="108" data-mesa="108" hidden="hidden"></form>
          </div>
          <div class="mesa m109 libre" data-mesa="109">
            109
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="109" data-mesa="109" hidden="hidden"></form>
          </div>
          <div class="mesa m110 libre" data-mesa="110">
            110
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="110" data-mesa="110" hidden="hidden"></form>
          </div>
          <div class="mesa m111 libre" data-mesa="111">
            111
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="111" data-mesa="111" hidden="hidden"></form>
          </div>
          <div class="mesa m112 libre" data-mesa="112">
            112
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="112" data-mesa="112" hidden="hidden"></form>
          </div>
          <div class="mesa m113 libre" data-mesa="113">
            113
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="113" data-mesa="113" hidden="hidden"></form>
          </div>
          <div class="mesa m114 libre" data-mesa="114">
            114
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="114" data-mesa="114" hidden="hidden"></form>
          </div>
          <div class="mesa m115 libre" data-mesa="115">
            115
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="115" data-mesa="115" hidden="hidden"></form>
          </div>
          <div class="mesa m116 libre" data-mesa="116">
            116
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="116" data-mesa="116" hidden="hidden"></form>
          </div>
          <div class="mesa m117 libre" data-mesa="117">
            117
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="117" data-mesa="117" hidden="hidden"></form>
          </div>
          <div class="mesa m118 libre" data-mesa="118">
            118
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="118" data-mesa="118" hidden="hidden"></form>
          </div>
          <div class="mesa m119 libre" data-mesa="119">
            119
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="119" data-mesa="119" hidden="hidden"></form>
          </div>
          <div class="mesa m120 libre" data-mesa="120">
            120
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="120" data-mesa="120" hidden="hidden"></form>
          </div>
          <div class="mesa m121 libre" data-mesa="121">
            121
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="121" data-mesa="121" hidden="hidden"></form>
          </div>
          <div class="mesa m122 libre" data-mesa="122">
            122
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="122" data-mesa="122" hidden="hidden"></form>
          </div>
          <div class="mesa m123 libre" data-mesa="123">
            123
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="123" data-mesa="123" hidden="hidden"></form>
          </div>
          <div class="mesa m124 libre" data-mesa="124">
            124
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="124" data-mesa="124" hidden="hidden"></form>
          </div>
          <div class="mesa m125 libre" data-mesa="125">
            125
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="125" data-mesa="125" hidden="hidden"></form>
          </div>
          <div class="mesa m126 libre" data-mesa="126">
            126
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="126" data-mesa="126" hidden="hidden"></form>
          </div>
          <div class="mesa m127 libre" data-mesa="127">
            127
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="127" data-mesa="127" hidden="hidden"></form>
          </div>
          <div class="mesa m128 libre" data-mesa="128">
            128
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="128" data-mesa="128" hidden="hidden"></form>
          </div>
          <div class="mesa m129 libre" data-mesa="129">
            129
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="129" data-mesa="129" hidden="hidden"></form>
          </div>
          <div class="mesa m130 libre" data-mesa="130">
            130
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="130" data-mesa="130" hidden="hidden"></form>
          </div>
          <div class="mesa m131 libre" data-mesa="131">
            131
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="131" data-mesa="131" hidden="hidden"></form>
          </div>
          <div class="mesa m132 libre" data-mesa="132">
            132
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="132" data-mesa="132" hidden="hidden"></form>
          </div>
          <div class="mesa m133 libre" data-mesa="133">
            133
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="133" data-mesa="133" hidden="hidden"></form>
          </div>
          <div class="mesa m134 libre" data-mesa="134">
            134
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="134" data-mesa="134" hidden="hidden"></form>
          </div>
          <div class="mesa m135 libre" data-mesa="135">
            135
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="135" data-mesa="135" hidden="hidden"></form>
          </div>
          <div class="mesa m136 libre" data-mesa="136">
            136
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="136" data-mesa="136" hidden="hidden"></form>
          </div>
          <div class="mesa m137 libre" data-mesa="137">
            137
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="137" data-mesa="137" hidden="hidden"></form>
          </div>
          <div class="mesa m138 libre" data-mesa="138">
            138
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="138" data-mesa="138" hidden="hidden"></form>
          </div>
          <div class="mesa m139 libre" data-mesa="139">
            139
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="139" data-mesa="139" hidden="hidden"></form>
          </div>
          <div class="mesa m140 libre" data-mesa="140">
            140
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="140" data-mesa="140" hidden="hidden"></form>
          </div>
          <div class="mesa m141 libre" data-mesa="141">
            141
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="141" data-mesa="141" hidden="hidden"></form>
          </div>
          <div class="mesa m142 libre" data-mesa="142">
            142
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="142" data-mesa="142" hidden="hidden"></form>
          </div>
          <div class="mesa m143 libre" data-mesa="143">
            143
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="143" data-mesa="143" hidden="hidden"></form>
          </div>
          <div class="mesa m144 libre" data-mesa="144">
            144
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="144" data-mesa="144" hidden="hidden"></form>
          </div>
          <div class="mesa m145 libre" data-mesa="145">
            145
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="145" data-mesa="145" hidden="hidden"></form>
          </div>
          <div class="mesa m146 libre" data-mesa="146">
            146
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="146" data-mesa="146" hidden="hidden"></form>
          </div>
          <div class="mesa m147 libre" data-mesa="147">
            147
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="147" data-mesa="147" hidden="hidden"></form>
          </div>
          <div class="mesa m148 libre" data-mesa="148">
            148
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="148" data-mesa="148" hidden="hidden"></form>
          </div>
          <div class="mesa m149 libre" data-mesa="149">
            149
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="149" data-mesa="149" hidden="hidden"></form>
          </div>
          <div class="mesa m150 libre" data-mesa="150">
            150
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="150" data-mesa="150" hidden="hidden"></form>
          </div>
          <div class="mesa m151 libre" data-mesa="151">
            151
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="151" data-mesa="151" hidden="hidden"></form>
          </div>
          <div class="mesa m152 libre" data-mesa="152">
            152
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="152" data-mesa="152" hidden="hidden"></form>
          </div>
          <div class="mesa m153 libre" data-mesa="153">
            153
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="153" data-mesa="153" hidden="hidden"></form>
          </div>
          <div class="mesa m154 libre" data-mesa="154">
            154
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="154" data-mesa="154" hidden="hidden"></form>
          </div>
          <div class="mesa m155 libre" data-mesa="155">
            155
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="155" data-mesa="155" hidden="hidden"></form>
          </div>
          <div class="mesa m156 libre" data-mesa="156">
            156
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="156" data-mesa="156" hidden="hidden"></form>
          </div>
          <div class="mesa m157 libre" data-mesa="157">
            157
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="157" data-mesa="157" hidden="hidden"></form>
          </div>
          <div class="mesa m158 libre" data-mesa="158">
            158
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="158" data-mesa="158" hidden="hidden"></form>
          </div>
          <div class="mesa m159 libre" data-mesa="159">
            159
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="159" data-mesa="159" hidden="hidden"></form>
          </div>
          <div class="mesa m160 libre" data-mesa="160">
            160
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="160" data-mesa="160" hidden="hidden"></form>
          </div>
          <div class="mesa m161 libre" data-mesa="161">
            161
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="161" data-mesa="161" hidden="hidden"></form>
          </div>
          <div class="mesa m162 libre" data-mesa="162">
            162
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="162" data-mesa="162" hidden="hidden"></form>
          </div>
          <div class="mesa m163 libre" data-mesa="163">
            163
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="163" data-mesa="163" hidden="hidden"></form>
          </div>
          <div class="mesa m164 libre" data-mesa="164">
            164
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="164" data-mesa="164" hidden="hidden"></form>
          </div>
          <div class="mesa m165 libre" data-mesa="165">
            165
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="165" data-mesa="165" hidden="hidden"></form>
          </div>
          <div class="mesa m166 libre" data-mesa="166">
            166
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="166" data-mesa="166" hidden="hidden"></form>
          </div>
          <div class="mesa m167 libre" data-mesa="167">
            167
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="167" data-mesa="167" hidden="hidden"></form>
          </div>
          <div class="mesa m168 libre" data-mesa="168">
            168
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="168" data-mesa="168" hidden="hidden"></form>
          </div>
          <div class="mesa m169 libre" data-mesa="169">
            169
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="169" data-mesa="169" hidden="hidden"></form>
          </div>
          <div class="mesa m170 libre" data-mesa="170">
            170
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="170" data-mesa="170" hidden="hidden"></form>
          </div>
          <div class="mesa m171 libre" data-mesa="171">
            171
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="171" data-mesa="171" hidden="hidden"></form>
          </div>
          <div class="mesa m172 libre" data-mesa="172">
            172
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="172" data-mesa="172" hidden="hidden"></form>
          </div>
          <div class="mesa m173 libre" data-mesa="173">
            173
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="173" data-mesa="173" hidden="hidden"></form>
          </div>
          <div class="mesa m174 libre" data-mesa="174">
            174
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="174" data-mesa="174" hidden="hidden"></form>
          </div>
          <div class="mesa m175 libre" data-mesa="175">
            175
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="175" data-mesa="175" hidden="hidden"></form>
          </div>
          <div class="mesa m176 libre" data-mesa="176">
            176
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="176" data-mesa="176" hidden="hidden"></form>
          </div>
          <div class="mesa m177 libre" data-mesa="177">
            177
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="177" data-mesa="177" hidden="hidden"></form>
          </div>
          <div class="mesa m178 libre" data-mesa="178">
            178
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="178" data-mesa="178" hidden="hidden"></form>
          </div>
          <div class="mesa m179 libre" data-mesa="179">
            179
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="179" data-mesa="179" hidden="hidden"></form>
          </div>
          <div class="mesa m180 libre" data-mesa="180">
            180
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="180" data-mesa="180" hidden="hidden"></form>
          </div>
          <div class="mesa m181 libre" data-mesa="181">
            181
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="181" data-mesa="181" hidden="hidden"></form>
          </div>
          <div class="mesa m182 libre" data-mesa="182">
            182
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="182" data-mesa="182" hidden="hidden"></form>
          </div>
          <div class="mesa m183 libre" data-mesa="183">
            183
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="183" data-mesa="183" hidden="hidden"></form>
          </div>
          <div class="mesa m184 libre" data-mesa="184">
            184
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="184" data-mesa="184" hidden="hidden"></form>
          </div>
          <div class="mesa m185 libre" data-mesa="185">
            185
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="185" data-mesa="185" hidden="hidden"></form>
          </div>
          <div class="mesa m186 libre" data-mesa="186">
            186
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="186" data-mesa="186" hidden="hidden"></form>
          </div>
          <div class="mesa m187 libre" data-mesa="187">
            187
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="187" data-mesa="187" hidden="hidden"></form>
          </div>
          <div class="mesa m188 libre" data-mesa="188">
            188
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="188" data-mesa="188" hidden="hidden"></form>
          </div>
          <div class="mesa m189 libre" data-mesa="189">
            189
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="189" data-mesa="189" hidden="hidden"></form>
          </div>
          <div class="mesa m190 libre" data-mesa="190">
            190
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="190" data-mesa="190" hidden="hidden"></form>
          </div>
          <div class="mesa m191 libre" data-mesa="191">
            191
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="191" data-mesa="191" hidden="hidden"></form>
          </div>
          <div class="mesa m192 libre" data-mesa="192">
            192
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="192" data-mesa="192" hidden="hidden"></form>
          </div>
          <div class="mesa m193 libre" data-mesa="193">
            193
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="193" data-mesa="193" hidden="hidden"></form>
          </div>
          <div class="mesa m194 libre" data-mesa="194">
            194
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="194" data-mesa="194" hidden="hidden"></form>
          </div>
          <div class="mesa m195 libre" data-mesa="195">
            195
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="195" data-mesa="195" hidden="hidden"></form>
          </div>
          <div class="mesa m196 libre" data-mesa="196">
            196
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="196" data-mesa="196" hidden="hidden"></form>
          </div>
          <div class="mesa m197 libre" data-mesa="197">
            197
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="197" data-mesa="197" hidden="hidden"></form>
          </div>
          <div class="mesa m198 libre" data-mesa="198">
            198
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="198" data-mesa="198" hidden="hidden"></form>
          </div>
          <div class="mesa m199 libre" data-mesa="199">
            199
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="199" data-mesa="199" hidden="hidden"></form>
          </div>
          <div class="mesa m200 libre" data-mesa="200">
            200
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="200" data-mesa="200" hidden="hidden"></form>
          </div>
          <div class="mesa m201 libre" data-mesa="201">
            201
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="201" data-mesa="201" hidden="hidden"></form>
          </div>
          <div class="mesa m202 libre" data-mesa="202">
            202
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="202" data-mesa="202" hidden="hidden"></form>
          </div>
          <div class="mesa m203 libre" data-mesa="203">
            203
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="203" data-mesa="203" hidden="hidden"></form>
          </div>
          <div class="mesa m204 libre" data-mesa="204">
            204
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="204" data-mesa="204" hidden="hidden"></form>
          </div>
          <div class="mesa m205 libre" data-mesa="205">
            205
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="205" data-mesa="205" hidden="hidden"></form>
          </div>
          <div class="mesa m206 libre" data-mesa="206">
            206
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="206" data-mesa="206" hidden="hidden"></form>
          </div>
          <div class="mesa m207 libre" data-mesa="207">
            207
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="207" data-mesa="207" hidden="hidden"></form>
          </div>
          <div class="mesa m208 libre" data-mesa="208">
            208
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="208" data-mesa="208" hidden="hidden"></form>
          </div>
          <div class="mesa m209 libre" data-mesa="209">
            209
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="209" data-mesa="209" hidden="hidden"></form>
          </div>
          <div class="mesa m210 libre" data-mesa="210">
            210
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="210" data-mesa="210" hidden="hidden"></form>
          </div>
          <div class="mesa m211 libre" data-mesa="211">
            211
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="211" data-mesa="211" hidden="hidden"></form>
          </div>
          <div class="mesa m212 libre" data-mesa="212">
            212
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="212" data-mesa="212" hidden="hidden"></form>
          </div>
          <div class="mesa m213 libre" data-mesa="213">
            213
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="213" data-mesa="213" hidden="hidden"></form>
          </div>
          <div class="mesa m214 libre" data-mesa="214">
            214
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="214" data-mesa="214" hidden="hidden"></form>
          </div>
          <div class="mesa m215 libre" data-mesa="215">
            215
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="215" data-mesa="215" hidden="hidden"></form>
          </div>
          <div class="mesa m216 libre" data-mesa="216">
            216
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="216" data-mesa="216" hidden="hidden"></form>
          </div>
          <div class="mesa m217 libre" data-mesa="217">
            217
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="217" data-mesa="217" hidden="hidden"></form>
          </div>
          <div class="mesa m218 libre" data-mesa="218">
            218
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="218" data-mesa="218" hidden="hidden"></form>
          </div>
          <div class="mesa m219 libre" data-mesa="219">
            219
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="219" data-mesa="219" hidden="hidden"></form>
          </div>
          <div class="mesa m220 libre" data-mesa="220">
            220
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="220" data-mesa="220" hidden="hidden"></form>
          </div>
          <div class="mesa m221 libre" data-mesa="221">
            221
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="221" data-mesa="221" hidden="hidden"></form>
          </div>
          <div class="mesa m222 libre" data-mesa="222">
            222
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="222" data-mesa="222" hidden="hidden"></form>
          </div>
          <div class="mesa m223 libre" data-mesa="223">
            223
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="223" data-mesa="223" hidden="hidden"></form>
          </div>
          <div class="mesa m224 libre" data-mesa="224">
            224
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="224" data-mesa="224" hidden="hidden"></form>
          </div>
          <div class="mesa m225 libre" data-mesa="225">
            225
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="225" data-mesa="225" hidden="hidden"></form>
          </div>
          <div class="mesa m226 libre" data-mesa="226">
            226
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="226" data-mesa="226" hidden="hidden"></form>
          </div>
          <div class="mesa m227 libre" data-mesa="227">
            227
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="227" data-mesa="227" hidden="hidden"></form>
          </div>
          <div class="mesa m228 libre" data-mesa="228">
            228
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="228" data-mesa="228" hidden="hidden"></form>
          </div>
          <div class="mesa m229 libre" data-mesa="229">
            229
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="229" data-mesa="229" hidden="hidden"></form>
          </div>
          <div class="mesa m230 libre" data-mesa="230">
            230
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="230" data-mesa="230" hidden="hidden"></form>
          </div>
          <div class="mesa m231 libre" data-mesa="231">
            231
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="231" data-mesa="231" hidden="hidden"></form>
          </div>
          <div class="mesa m232 libre" data-mesa="232">
            232
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="232" data-mesa="232" hidden="hidden"></form>
          </div>
          <div class="mesa m233 libre" data-mesa="233">
            233
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="233" data-mesa="233" hidden="hidden"></form>
          </div>
          <div class="mesa m234 libre" data-mesa="234">
            234
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="234" data-mesa="234" hidden="hidden"></form>
          </div>
          <div class="mesa m235 libre" data-mesa="235">
            235
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="235" data-mesa="235" hidden="hidden"></form>
          </div>
          <div class="mesa m236 libre" data-mesa="236">
            236
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="236" data-mesa="236" hidden="hidden"></form>
          </div>
          <div class="mesa m237 libre" data-mesa="237">
            237
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="237" data-mesa="237" hidden="hidden"></form>
          </div>
          <div class="mesa m238 libre" data-mesa="238">
            238
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="238" data-mesa="238" hidden="hidden"></form>
          </div>
          <div class="mesa m239 libre" data-mesa="239">
            239
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="239" data-mesa="239" hidden="hidden"></form>
          </div>
          <div class="mesa m240 libre" data-mesa="240">
            240
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="240" data-mesa="240" hidden="hidden"></form>
          </div>
          <div class="mesa m241 libre" data-mesa="241">
            241
            <form action="" method="post"><input type="checkbox" name="mesaEscogida" id="241" data-mesa="241" hidden="hidden"></form>
          </div>
        </div>
      </div>
    </div>
    ';
}
function busquedaSocio(){
  echo'
  <fieldset> <!-- BUSCAR SOCIO -->
  <legend>BUSCAR SOCIO</legend>
  <form action="controladorEmpanada.php" method="get">
  <p>Rellenar mínimo un campo</p>

    <div>
      <label for="numSocio">NUMERO SOCIO</label>
      <input type="text" name="numSocio" />
    </div>

    <div>
      <label for="nome">NOME COMPLETO</label>
      <input type="text" name="nome" />
    </div>

    <div>
      <label for="dni">DNI (sen letra)</label>
      <input type="text" name="dni" />
    </div>

    <div>
      <label for="email">EMAIL</label>
      <input type="email" name="email" />
    </div>
    <input type="submit" id="buscar" name="buscar" value="Buscar" />

  </form>
  </fieldset>
  ';
}
function formulariosBusquedaReservas(){
    echo'
    <fieldset>
    <legend>RESERVAR</legend>
    <form action="controladorEmpanada.php" method="get" class="formdatos">
      <fieldset>
        <legend>DATOS</legend>
        <label for="nomeCompleto">NOME COMPLETO </label>
        <input type="text" name="nomeCompleto" />

        <label for="tlf">TELEFONO</label>
        <input type="text" name="tlf" />

        <label for="email">EMAIL</label>
        <input type="email" name="email" />

        <label for="pena">PEÑA</label>
        <input type="text" name="pena" />
      </fieldset>
      <fieldset>
        <legend>SOCIO</legend>
        <label for="socio">SI</label>
        <input type="radio" name="socio" id="socioSi" value="SI" />
        <label for="socio">NO</label>
        <input type="radio" name="socio" id="socioNo" value="NO" checked/>
        <input type="hidden" name="idSocio" class="idSocio"/>
        </fieldset>
      <fieldset>
        <legend>UBICACION</legend>
        <span class="zonaSpan"></span>
        <label for="zona"></label>
      <input type="hidden" name="zona" class="zona" />
      </fieldset>
      <label for="observacions">OBSERVACIÓNS</label>
      <input type="text" name="observacions" />
      <fieldset>
        <legend>MESAS</legend>
        <span class="mesasEscogidSpan">NINGUNA</span>
        <br>
        <span>Total mesas: </span><span class="numeMesasSpan">0</span>
        <label for="mesasEscogidas"></label>
        <input type="hidden" name="mesasEscogidas" class="mesasEscogidas"/>

        <label for="numeroMesas"></label>
        <input type="hidden" name="numeroMesas" class="numeroMesas"/>
      </fieldset>
      <fieldset>
        <legend>PRECIO</legend>
        <span class="precioSpan">0</span><span> €</span>
        <label for="precio"></label>
        <input type="hidden" name="precio" class="precio" />
      </fieldset>

      <input type="submit" name="reservar" value="Reservar" />

      
    </form>
  </fieldset>
    ';
}
function mostrarSocios($resultado){
  echo "<table>
          <tr>
            <th>Numero de Socio</th>
            <th>Nome Completo</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Copiar en el formulario</th>
          </tr>
  ";
  foreach ($resultado as $key) {
    # code...
    
    echo "<tr >
            <td class=socio".$key->numSocio.">".$key->numSocio."</td>
            <td class=socio".$key->numSocio.">".$key->nomeCompleto."</td>
            <td class=socio".$key->numSocio.">".$key->telefono."</td>
            <td class=socio".$key->numSocio.">".$key->email."</td>
            <td><button id='pegar' data-id='".$key->numSocio."'>COPIAR</button></td>
          </tr>";
  }  
  echo"</table>";
}
function formularioEliminarReserva(){
  echo'
  <fieldset> <!-- ELIMINAR RESERVA -->
  <legend>ELIMINAR RESERVA</legend>
  <form action="controladorEmpanada.php" method="get">
  <p>Rellenar mínimo un campo</p>

    <div>
      <label for="numReserva">NUMERO RESERVA</label>
      <input type="text" name="numReserva" />
    </div>

    <div>
      <label for="nomePena">NOME PEÑA</label>
      <input type="text" name="nomePena" />
    </div>

    <div>
      <label for="nomePersoa">NOME DA PERSOA </label>
      <input type="text" name="nomePersoa" />
    </div>

    <div>
      <label for="email">EMAIL</label>
      <input type="email" name="email" />
    </div>

    <input type="submit" id="buscarReserva" name="buscarReservaAEliminar" value="Buscar" />

  </form>
  </fieldset>
  ';
}

function reservaRealizada(){
  echo"<h2>A RESERVA FOI REALIZADA CON ÉXITO</h2>
  
  <form action='controladorEmpanada.php'>
  <input type='submit' value='Volver'>
</form>";
      
}
function eliminacionRealizada(){
  echo"<h2>A RESERVA FOI ELIMINADA CON ÉXITO</h2>
  
      <form action='controladorEmpanada.php'>
        <input type='submit' value='Volver'>
      </form>
      ";
      
}
function mostrarReservas($resultado){
  echo "<table>
          <tr>
            <th>Numero de Reserva</th>
            <th>Nome da Peña</th>
            <th>Nome Completo</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Mesas</th>
            <th>Copiar en el formulario</th>
          </tr>
  ";
  foreach ($resultado as $key) {
    
    echo "<tr >
            <td class=socio".$key->numReserva.">".$key->numReserva."</td>
            <td class=socio".$key->numReserva.">".$key->pena."</td>
            <td class=socio".$key->numReserva.">".$key->nomeCompleto."</td>
            <td class=socio".$key->numReserva.">".$key->telefono."</td>
            <td class=socio".$key->numReserva.">".$key->email."</td>
            <td class=socio".$key->numReserva.">".$key->numeroMesas."</td>
            <td><form action='controladorEmpanada.php' methos='get'><input type='submit' value='Eliminar'> <input type='hidden' name='numReservaEliminar' value='".$key->numReserva."'/></form></td>
          </tr>";
  }  
  echo"</table>";
}