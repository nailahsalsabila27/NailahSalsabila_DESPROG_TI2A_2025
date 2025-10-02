<?php
$menu = [
    [
        "nama" => "beranda"
    ],
    [
        "nama"=> "berita",
        "subMenu" => [
            [
                "nama" => "wisata",
                "subMenu" => [
                    [
                        "nama"=>"pantai"
                    ],
                    [
                        "nama" => "gunung"
                    ]
                ]
            ],
            [
                "nama" => "kuliner"
            ],
            [
                "nama" => "hiburan"
            ]
        ]
    ],
    [
        "nama" => "tentang"
    ],
    [
        "nama" => "kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach($menu as $item){
        echo "<li>{$item['nama']}";
        if(isset($item['subMenu'])){
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>