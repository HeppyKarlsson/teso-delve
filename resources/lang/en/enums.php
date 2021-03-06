<?php
return [
    'CraftingType' => [
        4 => 'Alchemy',
        1 => 'Blacksmithing',
        2 => 'Clothier',
        3 => 'Enchanting',
        0 => 'Invalid',
        5 => 'Provisioning',
        6  => 'Woodworking',
    ],
    'EquipType' => [
        3 => 'Chest',
        11 => 'Costume',
        10 => 'Feet',
        13 => 'Hand',
        1 => 'Head',
        9 => 'Legs',
        14 => 'Main hand',
        0 => 'Invalid',
        2 => 'Neck',
        7 => 'Off hand',
        5 => 'One hand',
        15 => 'Poison',
        12 => 'Ring',
        4 => 'Shoulders',
        6 => 'Two hand',
        8 => 'Waist',
    ],
    'ArmorType' => [
        3 => 'Heavy',
        1 => 'Light',
        2 => 'Medium',
    ],
    'WeaponType' => [
        1 => 'Axe',
        8 => 'Bow',
        11 => 'Dagger',
        12 => 'Fire staff',
        13 => 'Frost staff',
        2 => 'Hammer',
        9 => 'Healing staff',
        15 => 'Lightning staff',
        14 => 'Shield',
        3 => 'Sword',
        5 => '2h Axe',
        6 => '2h Hammer',
        4 => '2h Sword',
    ],
    'Trait' => [
        '' => [
            15 => 'Training'
        ],
        1 => /* Weapon */ [
            'name' => 'Weapon',
            0 => 'None',
            2 => 'Charged',
//            8 => 'Decisive',
            5 => 'Defending',
            4 => 'Infused',
            9 => 'Intricate',
            26 => 'Nirnhoned',
            10 => 'Ornate',
            1 => 'Powered',
            3 => 'Precise',
            7 => 'Sharpened',
            6 => 'Training',
            8 => 'Weighted',
        ],
        2 /* Armor */ => [
            'name' => 'Armor',
            0 => '',
            18 => 'Divines',
            12 => 'Impenetrable',
            16 => 'Infused',
            20 => 'Intricate',
            25 => 'Nirnhoned',
            19 => 'Ornate',
            17 => 'Prosperous',
            13 => 'Reinforced',
            11 => 'Sturdy',
            15 => 'Training',
            14 => 'Well fitted',
        ],
        3 /* JEWELRY */ => [
            'name' => 'Jewelry',
            22 => 'Arcane',
            21 => 'Healthy',
            24 => 'Ornate',
            23 => 'Robust',
        ]
    ],
    'bags' => [
        App\Enum\BagType::VIRTUAL => 'Crafting bag',
        App\Enum\BagType::BANK => 'Bank',
    ],
    'styleItemChapter' => [
        \App\Enum\ItemStyleChapter::ALL => ['image' => null, 'self' => 'All'],
        \App\Enum\ItemStyleChapter::AXES => ['image' => '/esoui/art/icons/gear_breton_1haxe_a.dds', 'self' => 'Axes'],
        \App\Enum\ItemStyleChapter::SWORDS => ['image' => '/esoui/art/icons/gear_breton_1hsword_a.dds', 'self' => 'Swords'],
        \App\Enum\ItemStyleChapter::MACES => ['image' => '/esoui/art/icons/gear_breton_1hsword_a.dds', 'self' => 'Maces'],
        \App\Enum\ItemStyleChapter::BOWS => ['image' => '/esoui/art/icons/gear_breton_bow_a.dds', 'self' => 'Bows'],
        \App\Enum\ItemStyleChapter::STAVES => ['image' => '/esoui/art/icons/gear_breton_staff_a.dds', 'self' => 'Staffs'],
        \App\Enum\ItemStyleChapter::SHIELDS => ['image' => '/esoui/art/icons/gear_breton_shield_a.dds', 'self' => 'Shields'],
        \App\Enum\ItemStyleChapter::DAGGERS => ['image' => '/esoui/art/icons/gear_breton_dagger_a.dds', 'self' => 'Daggers'],

        \App\Enum\ItemStyleChapter::SHOULDERS => ['image' => '/esoui/art/icons/gear_breton_heavy_shoulders_a.dds', 'self' => 'Shoulders'],
        \App\Enum\ItemStyleChapter::HELMETS => ['image' => '/esoui/art/icons/gear_breton_heavy_head_b.dds', 'self' => 'Helmets'],
        \App\Enum\ItemStyleChapter::CHESTS => ['image' => '/esoui/art/icons/gear_breton_heavy_chest_a.dds', 'self' => 'Chests'],
        \App\Enum\ItemStyleChapter::BELTS => ['image' => '/esoui/art/icons/gear_breton_heavy_waist_a.dds', 'self' => 'Belts'],
        \App\Enum\ItemStyleChapter::BOOTS => ['image' => '/esoui/art/icons/gear_breton_heavy_feet_a.dds', 'self' => 'Boots'],
        \App\Enum\ItemStyleChapter::LEGS => ['image' => '/esoui/art/icons/gear_breton_heavy_legs_c.dds', 'self' => 'Legs'],
        \App\Enum\ItemStyleChapter::GLOVES => ['image' => '/esoui/art/icons/gear_breton_heavy_hands_a.dds', 'self' => 'Gloves'],

    ],
    'TraitType' => [
        18 => 'DIVINES',
        /* 17 => 'EXPLORATION', */
        12 => 'IMPENETRABLE',
        16 => 'INFUSED',
        20 => 'INTRICATE',
        25 => 'NIRNHONED',
        19 => 'ORNATE',
        17 => 'PROSPEROUS',
        13 => 'REINFORCED',
        11 => 'STURDY',
        15 => 'TRAINING',
        14 => 'WELL_FITTED',
        22 => 'ARCANE',
        21 => 'HEALTHY',
        24 => 'ORNATE',
        23 => 'ROBUST',
        27 => 'SPECIAL_STAT',
        2 => 'CHARGED',
        /* 8 => '_WEAPON_DECISIVE', */
        5 => 'DEFENDING',
        4 => 'INFUSED',
        9 => 'INTRICATE',
        26 => 'NIRNHONED',
        10 => 'ORNATE',
        1 => 'POWERED',
        3 => 'PRECISE',
        7 => 'SHARPENED',
        6 => 'TRAINING',
        8 => 'WEIGHTED',
    ],
    'SetType' => [
        1 => 'Monster set',
        2 => 'Zone set',
        3 => 'Dungeon set',
        4 => 'Crafted set',
    ],
    'Skilltypes' => [
        \App\Enum\SkilltypeEnum::CLASS_SKILL => 'Class',
        \App\Enum\SkilltypeEnum::WEAPON => 'Weapon',
        \App\Enum\SkilltypeEnum::ARMOR => 'Armor',
        \App\Enum\SkilltypeEnum::WORLD => 'World',
        \App\Enum\SkilltypeEnum::AVA => 'Alliance war',
        \App\Enum\SkilltypeEnum::GUILD => 'Guild',
        \App\Enum\SkilltypeEnum::RACIAL => 'Racial',
        \App\Enum\SkilltypeEnum::TRADESKILL => 'Craft',
    ]
];
