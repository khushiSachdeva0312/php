<?php


echo 'indexed array <br>';

$arr = ['one','two','three','four','five'];

print_r($arr);
echo '<br><br>';

echo 'associative array <br>';
$arr2 = [
    'one' => 'abc',
    'two' => 'def',
    'three' => 'ghi',
    'four' => 'jkl',
    'five' => 'mno',
];
print_r($arr2);
echo '<br><br>';

echo 'mulitdimensional array <br>';
$arr3 = [
    'one' => [
        'id' => '1',
        'name' => 'abc',
    ],
    'two' => [
        'id' => '2',
        'name' => 'def',
    ],
    'three' => [
        'id' => '3',
        'name' => 'ghi',
    ],
    'four' => [
        'id' => '4',
        'name' => 'jkl',
    ],
    'five' => [
        'id' => '5',
        'name' => 'mno',
    ],
];
print_r($arr3);


echo '<br><br>';
echo 'foreach loop<br>';
foreach ($arr3 as $value) {
    print_r($value);
}

echo '<br><br>';
echo 'while loop<br>';

$keys = array_keys($arr3);
$i = 0;

while ($i < count($keys)) {
    $key = $keys[$i];
    $value = $arr3[$key];

    echo "[key => $key, id => {$value['id']}, name => {$value['name']}] <br>";

    $i++;
}

echo '<br><br>';
echo 'For Loop<br>';

for ($i = 1;$i <= 5;$i++) {
    for ($j = 1;$j <= $i;$j++) {
        echo $j;
    }
    echo '<br>';
}
for ($k = 4;$k >= 1;$k--) {
    for ($l = 1;$l <= $k;$l++) {
        echo $l;
    }
    echo '<br>';
}




$arr4 = [
        '0' => [
            '0' => [
                'id' => '1',
                'name' => 'abc',
                'sublist' => [
                    'sub1' => [
                        'traditional' => 'english',
                        'foregin' => 'spanish'
                    ]
                ]
            ],
            '1' => [
                'id' => '2',
                'name' => 'def',
                'sublist' => [
                    'sub1' => [
                        'traditional' => 'italian',
                        'foregin' => 'french'
                    ]
                ]
            ],
        ],
        '1' => [
            '0' => [
                'id' => '3',
                'name' => 'ghi',
                'sublist' => [
                    'sub1' => [
                        'traditional' => 'english',
                        'foregin' => 'spanish'
                    ]
                ]
            ],
        ],
        '2' => [
            '0' => [
                'id' => '4',
                'name' => 'jkl',
                'sublist' => [
                    'sub1' => [
                        'traditional' => 'italian',
                        'foregin' => 'french'
                    ]
                ]
            ],
            '1' => [
                'id' => '5',
                'name' => 'mno',
                'sublist' => [
                    'sub1' => [
                        'traditional' => 'english',
                        'foregin' => 'spanish'
                    ]
                ]
            ],
        ],
    ];

echo '<pre>';
print_r($arr4);

echo '<table border="1">';
echo '<tr>
    <th>Index</th>
    <th>Id</th>
    <th>Name</th>
    <th>Traditional</th>
    <th>Foregin</th>
    ';


foreach ($arr4 as $outerIndex => $innerArray) {

    $id = '';
    $name = '';
    $traditional = '';
    $foregin = '';

    foreach ($innerArray as $item) {
        if (isset($item['id'])) {
            $id = $item['id'];
        }
        if (isset($item['name'])) {
            $name = $item['name'];
        }
        if (isset($item['sublist'])) {
            if (is_array($item['sublist'])) {
                foreach ($item['sublist'] as $items) {
                    $traditional = $items['traditional'];
                    $foregin = $items['foregin'];
                }
            }
        }
    }

    echo '<tr>';
    echo '<td>'.$outerIndex.'</td>';
    echo '<td>'.$id.'</td>';
    echo '<td>'.$name.'</td>';
    echo '<td>'.$traditional.'</td>';
    echo '<td>'.$foregin.'</td>';
    echo '</tr>';

}

echo '</table>';
