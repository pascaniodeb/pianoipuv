<?php

return [
    'C' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra inclinada en el nombre del acorde indica que la segunda letra se agrega como una nueva nota de bajo. Por ejemplo, C/B debe leerse como un acorde de Do mayor con una nota B en el bajo, y C/Bb como un acorde de Do mayor con una nota Bb (Si bemol) en el bajo, y así sucesivamente.',
                'teoria' => [
                    'C/B' => 'Es idéntico a la tercera inversión del acorde Cmaj7.',
                    'C/Bb' => 'Es idéntico a la tercera inversión del acorde C7.',
                    'C/A' => 'Es idéntico a la tercera inversión del acorde C6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'C/B',
                    'imagen' => 'backend/assets/images/c_b.png',
                    'descripcion' => 'Acorde C con bajo en B.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'C/Bb',
                    'imagen' => 'backend/assets/images/c_b_flat.png',
                    'descripcion' => 'Acorde C con bajo en Bb.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'C/A',
                    'imagen' => 'backend/assets/images/c_a.png',
                    'descripcion' => 'Acorde C con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'C/Ab',
                    'imagen' => 'backend/assets/images/c_a_flat.png',
                    'descripcion' => 'Acorde C con bajo en Ab.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'C/D',
                    'imagen' => 'backend/assets/images/c_d.png',
                    'descripcion' => 'Acorde C con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'C/F',
                    'imagen' => 'backend/assets/images/c_f.png',
                    'descripcion' => 'Acorde C con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Cm/Bb debe leerse como un acorde de C menor con una nota B bemol en el bajo y Cm/A como un acorde de C menor con una nota A en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Cm/Bb' => 'Es idéntico a la tercera inversión de Cm7.',
                    'Cm/A' => 'Es idéntico a la tercera inversión de Cm6',
                    'Cm/Ab' => 'Es idéntico a Abmaj7.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Cm/Bb',
                    'imagen' => 'backend/assets/images/cm_b_flat.png',
                    'descripcion' => 'Acorde Cm con bajo en Bb.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Cm/A',
                    'imagen' => 'backend/assets/images/cm_a.png',
                    'descripcion' => 'Acorde Cm con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Cm/Ab',
                    'imagen' => 'backend/assets/images/cm_a_flat.png',
                    'descripcion' => 'Acorde Cm con bajo en Ab.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        '7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, C7/A debe leerse como un acorde de C séptima con una nota A en el bajo, y así sucesivamente. Tenga en cuenta que C7/D también se podría tocar con dos manos sin inversión.',
                'teoria' => [
                    'C7/A' => 'Podría verse como una inversión de C13 con la novena y la undécima omitidas.',
                    'C7/F' => 'Podría verse como una inversión de C11 con la novena omitida.',
                    'C7/D' => 'También es una inversión de C9.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'C7/A',
                    'imagen' => 'backend/assets/images/c7_a.png',
                    'descripcion' => 'Acorde C7 con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'C7/F',
                    'imagen' => 'backend/assets/images/c7_f.png',
                    'descripcion' => 'Acorde C7 con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'C7/D',
                    'imagen' => 'backend/assets/images/c7_d.png',
                    'descripcion' => 'Acorde C7 con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'm7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Cm7/F debe leerse como un acorde de C menor séptima con una nota F en el bajo, y así sucesivamente. Tenga en cuenta que Cm7/F también se podría tocar con dos manos sin inversión.',
                'teoria' => [
                    'Cm7/F' => 'Podría verse como una inversión de Cm11 con la novena omitida.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Cm7/F',
                    'imagen' => 'backend/assets/images/cm7_f.png',
                    'descripcion' => 'Acorde Cm7 con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Cm7/B',
                    'imagen' => 'backend/assets/images/cm7_b.png',
                    'descripcion' => 'Acorde Cm7 con bajo en B.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'C#' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, C#/A# debe leerse como un acorde de Do sostenido mayor con una nota de La sostenido en el bajo.',
                'teoria' => [
                    'C#/A#' => 'Es idéntico a la tercera inversión de C#6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'C#/A#',
                    'imagen' => 'backend/assets/images/d_flat_b_flat.png',
                    'descripcion' => 'Acorde C# con bajo en A#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, C#m/B debe leerse como un acorde de Do sostenido menor con una nota B en el bajo.',
                'teoria' => [
                    'C#m/B' => 'Es idéntico a la tercera inversión de C#m7.',
                    'C#m/A' => 'Es idéntico a Amaj7.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'C#m/B',
                    'imagen' => 'backend/assets/images/d_flat_m_b.png',
                    'descripcion' => 'Acorde C#m con bajo en B.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'C#m/A',
                    'imagen' => 'backend/assets/images/d_flat_m_a.png',
                    'descripcion' => 'Acorde C#m con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],

    ],
    'DB' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'Explicación: La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Db/C debe leerse como un acorde de Re bemol mayor con una nota C en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Db/C' => 'Es idéntico a la tercera inversión de Dbmaj7.',
                    'Db/Bb' => 'Es idéntico a la tercera inversión de Db6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Db/C',
                    'imagen' => 'backend/assets/images/d_flat_c.png',
                    'descripcion' => 'Acorde Db con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Db/Bb',
                    'imagen' => 'backend/assets/images/d_flat_b_flat.png',
                    'descripcion' => 'Acorde Db con bajo en Bb.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Dbm/B debe leerse como un acorde de Re bemol menor con una nota B en el bajo.',
                'teoria' => [
                    'Dbm/B' => 'Es idéntico a la tercera inversión de Dbm7.',
                    'Dbm/A' => 'Es idéntico a Amaj7.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Dbm/B',
                    'imagen' => 'backend/assets/images/d_flat_m_b.png',
                    'descripcion' => 'Acorde C#m con bajo en B.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Dbm/A',
                    'imagen' => 'backend/assets/images/d_flat_m_a.png',
                    'descripcion' => 'Acorde C#m con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'D' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, D/C# debe leerse como un acorde de D mayor con una nota C sostenido en el bajo y, por lo tanto, D/C debe leerse como un acorde de D mayor con una nota C en el bajo, y así sucesivamente.',
                'teoria' => [
                    'D/C#' => 'Es idéntico a la tercera inversión de Dmaj7,.',
                    'D/C' => 'Es idéntico a la tercera inversión de D7.',
                    'D/B' => 'Es idéntico a la tercera inversión de D6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'D/C#',
                    'imagen' => 'backend/assets/images/dmaj7_d_flat.png',
                    'descripcion' => 'Acorde D con bajo en C#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'D/C',
                    'imagen' => 'backend/assets/images/d_c.png',
                    'descripcion' => 'Acorde D con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'D/B',
                    'imagen' => 'backend/assets/images/d_b.png',
                    'descripcion' => 'Acorde D con bajo en B.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'D/F',
                    'imagen' => 'backend/assets/images/d_f.png',
                    'descripcion' => 'Acorde D con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Dm/C debe leerse como un acorde de D menor con una nota C en el bajo y Dm/Bb como un acorde de D menor con una nota B bemol en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Dm/C' => 'Es idéntico a la tercera inversión de Dm7.',
                    'Dm/B' => 'Es idéntico a Bm7b5.',
                    'Dm/Bb' => 'Es idéntico a Bbmaj7.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Dm/C',
                    'imagen' => 'backend/assets/images/dm_c.png',
                    'descripcion' => 'Acorde Dm con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Dm/B',
                    'imagen' => 'backend/assets/images/dm_b.png',
                    'descripcion' => 'Acorde Dm con bajo en B.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Dm/Bb',
                    'imagen' => 'backend/assets/images/dm_b_flat.png',
                    'descripcion' => 'Acorde Dm con bajo en Bb.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Dm/G',
                    'imagen' => 'backend/assets/images/dm_g.png',
                    'descripcion' => 'Acorde Dm con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        '7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, D7/B debe leerse como un acorde de D séptima con una nota B en el bajo, y así sucesivamente. Tenga en cuenta que D7/E también sería posible tocarlo con dos manos sin inversión.',
                'teoria' => [
                    'D7/B' => 'Podría verse como una inversión de D13 con la novena y la undécima omitidas.',
                    'D7/G' => 'Podría verse como una inversión de D11 con la novena omitida.',
                    'D7/E' => 'También es una inversión de D9.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'D7/B',
                    'imagen' => 'backend/assets/images/d7_b.png',
                    'descripcion' => 'Acorde D7 con bajo en B.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'D7/G',
                    'imagen' => 'backend/assets/images/d7_g.png',
                    'descripcion' => 'Acorde D7 con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'D7/E',
                    'imagen' => 'backend/assets/images/d7_e.png',
                    'descripcion' => 'Acorde D7 con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'm7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Dm7/G debe leerse como un acorde de Re menor séptima con una nota G en el bajo, y así sucesivamente. Tenga en cuenta que Dm7/G también sería posible tocarlo con dos manos sin inversión.',
                'teoria' => [
                    'Dm7/G' => 'Podría verse como una inversión de Dm11 con la novena omitida.',
                    'Dm7/B' => 'Podría verse como una inversión de Dm13 con la novena y la undécima omitidas.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Dm7/G',
                    'imagen' => 'backend/assets/images/dm7_g.png',
                    'descripcion' => 'Acorde Dm7 con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Dm7/B',
                    'imagen' => 'backend/assets/images/dm7_b.png',
                    'descripcion' => 'Acorde Dm7 con bajo en B.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'D#' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, D#/C# debe leerse como un acorde de Re sostenido mayor con una nota de Do sostenido en el bajo, y así sucesivamente.',
                'teoria' => [
                    'D#/C#' => 'Es idéntico a la tercera inversión de Dmaj7.',
                    'D#/C' => 'Es idéntico a la tercera inversión de D#6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'D/C#',
                    'imagen' => 'backend/assets/images/e_flat_d_flat.png',
                    'descripcion' => 'Acorde D# con bajo en C#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'D/C',
                    'imagen' => 'backend/assets/images/e_flat_c.png',
                    'descripcion' => 'Acorde D con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, D#m/C debe leerse como un acorde de Re sostenido menor con una nota C en el bajo.',
                'teoria' => [
                    'D#m/C#' => 'Es idéntico a la tercera inversión de D#m7,',
                    'D#m/C' => 'Es idéntico a la tercera inversión de D#m6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'D#m/C#',
                    'imagen' => 'backend/assets/images/e_flat_m_d_flat.png',
                    'descripcion' => 'Acorde D#m con bajo en C#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'D#m/C',
                    'imagen' => 'backend/assets/images/e_flat_m_c.png',
                    'descripcion' => 'Acorde D#m con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'EB' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Eb/D debe leerse como un acorde de Mi bemol mayor con una nota D en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Eb/D' => 'Es idéntico a la tercera inversión de Ebmaj7.',
                    'Eb/Db' => 'Es idéntico a la tercera inversión de Eb7.',
                    'Eb/C' => 'Es idéntico a la tercera inversión de Eb6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Eb/D',
                    'imagen' => 'backend/assets/images/e_flat_d.png',
                    'descripcion' => 'Acorde Eb con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Eb/Db',
                    'imagen' => 'backend/assets/images/e_flat_d_flat.png',
                    'descripcion' => 'Acorde Eb con bajo en Db.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Eb/C',
                    'imagen' => 'backend/assets/images/e_flat_c.png',
                    'descripcion' => 'Acorde Eb con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Ebm/C debe leerse como un acorde de Mi bemol menor con una nota C en el bajo.',
                'teoria' => [
                    'Ebm/Db' => 'Es idéntico a la tercera inversión de Ebm7.',
                    'Ebm/C' => 'Es idéntico a la tercera inversión de Ebm6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Ebm/Db',
                    'imagen' => 'backend/assets/images/e_flat_m_d_flat.png',
                    'descripcion' => 'Acorde Ebm con bajo en Db.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Ebm/C',
                    'imagen' => 'backend/assets/images/e_flat_m_c.png',
                    'descripcion' => 'Acorde Ebm con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'E' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, E/D debe leerse como un acorde de E mayor con una nota D en el bajo y E/C# como un acorde de E mayor con una nota C# en el bajo, y así sucesivamente. Tenga en cuenta que E/F y E/F# también se pueden tocar con dos manos sin inversión.',
                'teoria' => [
                    'E/D' => 'Es idéntico a la tercera inversión de E7.',
                    'E/C#' => 'Es idéntico a la tercera inversión de E6.',
                    'E/F#' => 'Es idéntico a F#9sus4(no5).',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'E/D',
                    'imagen' => 'backend/assets/images/e_d.png',
                    'descripcion' => 'Acorde E con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'E/C#',
                    'imagen' => 'backend/assets/images/e_d_flat.png',
                    'descripcion' => 'Acorde E con bajo en C#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'E/A',
                    'imagen' => 'backend/assets/images/e_a.png',
                    'descripcion' => 'Acorde E con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'E/F',
                    'imagen' => 'backend/assets/images/e_f.png',
                    'descripcion' => 'Acorde E con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'E/F#',
                    'imagen' => 'backend/assets/images/e_g_flat.png',
                    'descripcion' => 'Acorde E con bajo en F#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Em/D debe leerse como un acorde de E menor con una nota D en el bajo y Em/C como un acorde de E menor con una nota C en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Em/D' => 'Es idéntico a la tercera inversión de Em7.',
                    'Em/C' => 'Es idéntico a Cmaj7.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Em/D',
                    'imagen' => 'backend/assets/images/em_d.png',
                    'descripcion' => 'Acorde Em con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Em/C',
                    'imagen' => 'backend/assets/images/em_c.png',
                    'descripcion' => 'Acorde Em con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        '7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, E7/C# debe leerse como un acorde de E séptima con una nota C sostenido en el bajo y E7/A como un acorde de E séptima con una nota A en el bajo.',
                'teoria' => [
                    'E7/C#' => 'Podría verse como una inversión de E13 con la novena y la undécima omitidas.',
                    'E7/A' => 'E7/A podría verse como una inversión de E11 con la novena omitida.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'E7/C#',
                    'imagen' => 'backend/assets/images/e7_c_sharp.png',
                    'descripcion' => 'Acorde E7 con bajo en C#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'E7/A',
                    'imagen' => 'backend/assets/images/e7_a.png',
                    'descripcion' => 'Acorde E7 con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'm7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Em7/A debe leerse como un acorde de séptima menor de Mi con una nota A en el bajo, y así sucesivamente. Tenga en cuenta que Em7/A también se podría tocar con dos manos sin inversión.',
                'teoria' => [
                    'Em7/A' => 'Podría verse como una inversión de Em11 con la novena omitida.',
                    'Em7/C' => 'Podría verse como una inversión de Em13 con la novena y la undécima omitidas.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Em7/A',
                    'imagen' => 'backend/assets/images/em7_a.png',
                    'descripcion' => 'Acorde Em7 con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Em7/C',
                    'imagen' => 'backend/assets/images/em7_c.png',
                    'descripcion' => 'Acorde Em7 con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'F' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, F/E debe leerse como un acorde F Mayor con una nota E en el bajo y F/D como un acorde F Mayor con una nota D en el bajo.',
                'teoria' => [
                    'F/E' => 'Es idéntico a la tercera inversión de Fmaj7',
                    'F/D' => 'Es idéntico a la tercera inversión de F6',
                    'F/G' => 'Es idéntico a F9sus4(no5).',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'F/E',
                    'imagen' => 'backend/assets/images/f_e.png',
                    'descripcion' => 'Acorde F con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'F/D',
                    'imagen' => 'backend/assets/images/f_d.png',
                    'descripcion' => 'Acorde F con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'F/G',
                    'imagen' => 'backend/assets/images/f_g.png',
                    'descripcion' => 'Acorde E con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Fm/G debe leerse como un acorde de F menor con una nota G en el bajo, Fm/Eb como un acorde de F menor con una nota E bemol en el bajo y Fm/D como un acorde de F menor con una nota D en el bajo, y así sucesivamente. Tenga en cuenta que Fm/G también se puede tocar con dos manos sin inversión.',
                'teoria' => [
                    'Fm/Eb' => 'Es idéntico a la tercera inversión de Fm7',
                    'Fm/C' => 'Es idéntico a la tercera inversión de Fm6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Fm/G',
                    'imagen' => 'backend/assets/images/fm_g.png',
                    'descripcion' => 'Acorde Fm con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Fm/Eb',
                    'imagen' => 'backend/assets/images/fm_e_flat.png',
                    'descripcion' => 'Acorde Fm con bajo en Eb.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Fm/D',
                    'imagen' => 'backend/assets/images/fm_d.png',
                    'descripcion' => 'Acorde Fm con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        '7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, F7/D debe leerse como un acorde F séptima con una nota D en el bajo y F7/Bb como un acorde F séptima con una nota B bemol en el bajo.',
                'teoria' => [
                    'F7/D' => 'Podría verse como una inversión de F13 con la novena y la undécima omitidas.',
                    'F7/Bb' => 'Podría verse como una inversión de F11 con la novena omitida.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'F7/D',
                    'imagen' => 'backend/assets/images/f7_d.png',
                    'descripcion' => 'Acorde F7 con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'F7/Bb',
                    'imagen' => 'backend/assets/images/f7_b_flat.png',
                    'descripcion' => 'Acorde F7 con bajo en Bb.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'm7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Fm7/G debe leerse como un acorde de F menor séptima con una nota G en el bajo, y así sucesivamente. Tenga en cuenta que Fm7/G también se podría tocar con dos manos sin inversión.',
                'teoria' => [
                    'Fm7/G' => 'Podría verse como la cuarta inversión de Fm9.',
                    'Fm7/D' => 'Podría verse como una inversión de Fm13 con la novena y la undécima omitidas.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Fm7/G',
                    'imagen' => 'backend/assets/images/fm7_g.png',
                    'descripcion' => 'Acorde Fm7 con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Fm7/D',
                    'imagen' => 'backend/assets/images/fm7_d.png',
                    'descripcion' => 'Acorde Fm7 con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'F#' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, F#/D# debe leerse como un acorde de Fa sostenido mayor con una nota de Re sostenido en el bajo.',
                'teoria' => [
                    'F#/D#' => 'Es idéntico a la tercera inversión de F#6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'F#/D#',
                    'imagen' => 'backend/assets/images/g_flat_e_flat.png',
                    'descripcion' => 'Acorde F# con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, F#m/E debe leerse como un acorde de F sostenido menor con una nota E en el bajo y F#m/D como un acorde de F sostenido menor con una nota D en el bajo, y así sucesivamente.',
                'teoria' => [
                    'F#m/E' => 'Es idéntico a la tercera inversión de F#m7',
                    'F#m/D' => 'Es idéntico a Dmaj7.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'F#m/E',
                    'imagen' => 'backend/assets/images/g_flat_m_e.png',
                    'descripcion' => 'Acorde F#m con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'F#m/D',
                    'imagen' => 'backend/assets/images/g_flat_m_d.png',
                    'descripcion' => 'Acorde F#m con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'GB' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Gb/F debe leerse como un acorde de sol bemol mayor con una nota F en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Gb/F' => 'Es idéntico a la tercera inversión de Gbmaj7.',
                    'Gb/Eb' => 'Es idéntico a la tercera inversión de Gb6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Gb/F',
                    'imagen' => 'backend/assets/images/g_flat_f.png',
                    'descripcion' => 'Acorde Gb con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Gb/Eb',
                    'imagen' => 'backend/assets/images/g_flat_e_flat.png',
                    'descripcion' => 'Acorde Gb con bajo en Eb.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Gbm/E debe leerse como un acorde de sol bemol menor con una nota E en el bajo y Gbm/D como un acorde de sol bemol menor con una nota D en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Gbm/E' => 'Es idéntico a la tercera inversión de Gbm7.',
                    'Gbm/D' => 'Es idéntico a Dmaj7.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Gbm/E',
                    'imagen' => 'backend/assets/images/g_flat_m_e.png',
                    'descripcion' => 'Acorde Gbm con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Gbm/D',
                    'imagen' => 'backend/assets/images/g_flat_m_d.png',
                    'descripcion' => 'Acorde Gbm con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'G' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, G/F# debe leerse como un acorde de G Mayor con una nota F sostenido en el bajo y G/F como un acorde de G Mayor con una nota F en el bajo.',
                'teoria' => [
                    'G/F#' => 'Es idéntico a la tercera inversión de Gmaj7',
                    'G/F' => 'Es idéntico a la tercera inversión de G7',
                    'G/E' => 'Es idéntico a la tercera inversión de G6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'G/F#',
                    'imagen' => 'backend/assets/images/g_g_flat.png',
                    'descripcion' => 'Acorde G con bajo en F#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'G/F',
                    'imagen' => 'backend/assets/images/g_f.png',
                    'descripcion' => 'Acorde G con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'G/E',
                    'imagen' => 'backend/assets/images/g_e.png',
                    'descripcion' => 'Acorde G con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Gm/F debe leerse como un acorde de G menor con una nota F en el bajo y Gm/E como un acorde de G menor con una nota E en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Gm/F' => 'Es idéntico a la tercera inversión de Gm7',
                    'Gm/E' => 'Es idéntico a la tercera inversión de Gm6.',
                    'Gm/C' => 'Es idéntico a C9(no3).',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Gm/F',
                    'imagen' => 'backend/assets/images/gm_f.png',
                    'descripcion' => 'Acorde Gm con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Gm/E',
                    'imagen' => 'backend/assets/images/gm_e.png',
                    'descripcion' => 'Acorde Gm con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Gm/C',
                    'imagen' => 'backend/assets/images/gm_c.png',
                    'descripcion' => 'Acorde Gm con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        '7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, G7/E debe leerse como un acorde G séptima con una nota E en el bajo, y así sucesivamente. Tenga en cuenta que G7/A también sería posible tocar con dos manos sin inversión.',
                'teoria' => [
                    'G7/E' => 'Podría verse como una inversión de G13 con la novena y la undécima omitidas.',
                    'G7/C' => 'Podría verse como una inversión de G11 con la novena omitida.',
                    'G7/A' => 'También es una inversión de G9.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'G7/E',
                    'imagen' => 'backend/assets/images/g7_e.png',
                    'descripcion' => 'Acorde G7 con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'G7/C',
                    'imagen' => 'backend/assets/images/g7_c.png',
                    'descripcion' => 'Acorde G7 con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'G7/A',
                    'imagen' => 'backend/assets/images/g7_a.png',
                    'descripcion' => 'Acorde G7 con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'm7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Gm7/C debe leerse como un acorde de Gm7 menor de séptima con una nota C en el bajo, y así sucesivamente. Tenga en cuenta que Gm7/C también sería posible tocarlo con dos manos sin inversión.',
                'teoria' => [
                    'Gm7/C' => 'Podría verse como una inversión de Gm11 con la novena omitida.',
                    'Gm7/Eb' => 'Es idéntico a Ebmaj9.',
                    'Gm7/E' => 'Podría verse como una inversión de Gm13 con la novena y la undécima omitidas.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Gm7/C',
                    'imagen' => 'backend/assets/images/gm7_c.png',
                    'descripcion' => 'Acorde Gm7 con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Gm7/Eb',
                    'imagen' => 'backend/assets/images/gm7_e_flat.png',
                    'descripcion' => 'Acorde Gm7 con bajo en Eb.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Gm7/E',
                    'imagen' => 'backend/assets/images/gm7_e.png',
                    'descripcion' => 'Acorde Gm7 con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'G#' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, G#/F debe leerse como un acorde de sol sostenido mayor con una nota F en el bajo, y así sucesivamente.',
                'teoria' => [
                    'G#/F' => 'Es idéntico a la tercera inversión de G#6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'G#/F',
                    'imagen' => 'backend/assets/images/a_flat_f.png',
                    'descripcion' => 'Acorde G# con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'G#/C#',
                    'imagen' => 'backend/assets/images/a_flat_d_flat.png',
                    'descripcion' => 'Acorde G# con bajo en C#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, G#m/F debe leerse como un acorde de sol sostenido menor con una nota F en el bajo.',
                'teoria' => [
                    'G#m/F' => 'Es idéntico a la tercera inversión de G#m6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'G#m/E',
                    'imagen' => 'backend/assets/images/a_flat_m_f.png',
                    'descripcion' => 'Acorde G#m con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'AB' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Ab/G debe leerse como un acorde de La bemol mayor con una nota G en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Ab/G' => 'Es idéntico a la tercera inversión de Abmaj7.',
                    'Ab/F' => 'Es idéntico a la tercera inversión de Ab6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Ab/G',
                    'imagen' => 'backend/assets/images/a_flat_g.png',
                    'descripcion' => 'Acorde Ab con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Ab/F',
                    'imagen' => 'backend/assets/images/a_flat_f.png',
                    'descripcion' => 'Acorde Ab con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Ab/Db',
                    'imagen' => 'backend/assets/images/a_flat_d_flat.png',
                    'descripcion' => 'Acorde Ab con bajo en Db.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Abm/F debe leerse como un acorde de La bemol menor con una nota F en el bajo.',
                'teoria' => [
                    'Abm/F' => 'Es idéntico a la tercera inversión de Abm6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'G#m/E',
                    'imagen' => 'backend/assets/images/a_flat_m_f.png',
                    'descripcion' => 'Acorde Abm con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'A' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, A/G# debe leerse como un acorde de A mayor con una nota G# en el bajo y A/G como un acorde de A mayor con una nota G en el bajo, y así sucesivamente.',
                'teoria' => [
                    'A/G#' => 'Es idéntico a la tercera inversión de Amaj7.',
                    'A/G' => 'Es idéntico a la tercera inversión de A7.',
                    'A/F#' => 'Es idéntico a la tercera inversión de A6.',
                    'A/F' => 'Es idéntico a Fmaj7(#5).',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'A/G#',
                    'imagen' => 'backend/assets/images/a_flat_a.png',
                    'descripcion' => 'Acorde A con bajo en G#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'A/G',
                    'imagen' => 'backend/assets/images/a_g.png',
                    'descripcion' => 'Acorde A con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'A/F#',
                    'imagen' => 'backend/assets/images/a_g_flat.png',
                    'descripcion' => 'Acorde A con bajo en F#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'A/F',
                    'imagen' => 'backend/assets/images/a_f.png',
                    'descripcion' => 'Acorde A con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Am/G debe leerse como un acorde de A menor con una nota G en el bajo y Am/F# como un acorde de A menor con una nota F sostenido en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Am/G' => 'Es idéntico a la tercera inversión de Am7.',
                    'Am/F#' => 'Es idéntico a la tercera inversión de Am6.',
                    'Am/C' => 'Es idéntico a Fmaj7',
                    'Am/D' => 'Es idéntico a D9(no3)',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Am/G',
                    'imagen' => 'backend/assets/images/am_g.png',
                    'descripcion' => 'Acorde Am con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Am/F#',
                    'imagen' => 'backend/assets/images/am_g_flat.png',
                    'descripcion' => 'Acorde Am con bajo en F#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Am/F',
                    'imagen' => 'backend/assets/images/am_f.png',
                    'descripcion' => 'Acorde Am con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Am/D',
                    'imagen' => 'backend/assets/images/am_d.png',
                    'descripcion' => 'Acorde Am con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        '7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, A7/G# debe leerse como un acorde de séptima A con una nota G# en el bajo y así sucesivamente.',
                'teoria' => [
                    'A7/G#' => 'Es idéntico a Amaj7/G# (tercera inversión de Amaj7).',
                    'A7/F#' => 'Podría verse como una inversión de A13 con la novena y la undécima omitidas.',
                    'A7/F' => 'Podría verse como una inversión de A13 con la novena y la undécima omitidas.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'A7/G#',
                    'imagen' => 'backend/assets/images/a7_g_sharp.png',
                    'descripcion' => 'Acorde A7 con bajo en G#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'A7/F#',
                    'imagen' => 'backend/assets/images/a7_f_sharp.png',
                    'descripcion' => 'Acorde A7 con bajo en F#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'A7/F',
                    'imagen' => 'backend/assets/images/a7_f.png',
                    'descripcion' => 'Acorde A7 con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'm7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Am7/D debe leerse como un acorde de séptima menor de La con una nota D en el bajo, y así sucesivamente. Tenga en cuenta que Am7/D también se podría tocar con dos manos sin inversión.',
                'teoria' => [
                    'Am7/D' => 'Podría verse como una inversión de Am11 con la novena omitida.',
                    'Am7/F' => 'Es idéntico a Fmaj9.',
                    'Am7/F#' => 'Podría verse como una inversión de Am13 con la novena y la undécima omitidas.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Am7/D',
                    'imagen' => 'backend/assets/images/am7_d.png',
                    'descripcion' => 'Acorde Am7 con bajo en D.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Am7/F',
                    'imagen' => 'backend/assets/images/am7_f.png',
                    'descripcion' => 'Acorde Am7 con bajo en F.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Am7/F#',
                    'imagen' => 'backend/assets/images/am7_g_flat.png',
                    'descripcion' => 'Acorde Am7 con bajo en F#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'A#' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, A#/G debe leerse como un acorde de La sostenido mayor con una nota G en el bajo, y así sucesivamente.',
                'teoria' => [
                    'A#/G' => 'Es idéntico a la tercera inversión de A#6.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'A#/G',
                    'imagen' => 'backend/assets/images/b_flat_g.png',
                    'descripcion' => 'Acorde A# con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'A#/D#',
                    'imagen' => 'backend/assets/images/b_flat_e_flat.png',
                    'descripcion' => 'Acorde A# con bajo en D#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'A#/C',
                    'imagen' => 'backend/assets/images/b_flat_c.png',
                    'descripcion' => 'Acorde A# con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, A#m/G debe leerse como un acorde de La sostenido menor con una nota G en el bajo.',
                'teoria' => [
                    'A#m/G#' => 'Es idéntico a la tercera inversión de A#m7.',
                    'A#m/G' => 'Es idéntico a la tercera inversión de A#m6.',
                    'A#m/F#' => 'Es idéntico a F#maj7',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'A#m/G#',
                    'imagen' => 'backend/assets/images/b_flat_m_a_flat.png',
                    'descripcion' => 'Acorde A#m con bajo en G#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'A#m/G',
                    'imagen' => 'backend/assets/images/b_flat_m_g.png',
                    'descripcion' => 'Acorde A#m con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'A#m/F#',
                    'imagen' => 'backend/assets/images/b_flat_m_g_flat.png',
                    'descripcion' => 'Acorde A#m con bajo en F#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'BB' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Bb/A debe leerse como un acorde de Si bemol mayor con una nota A en el bajo, y así sucesivamente.',
                'teoria' => [
                    'Bb/A' => 'Es idéntico a la tercera inversión de Bbmaj7.',
                    'Bb/G' => 'Es idéntico a la tercera inversión de Bb6.',
                    'Bb/C' => 'Es idéntico a C9sus4(no5).',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Bb/A',
                    'imagen' => 'backend/assets/images/b_flat_a.png',
                    'descripcion' => 'Acorde Bb con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Bb/G',
                    'imagen' => 'backend/assets/images/b_flat_g.png',
                    'descripcion' => 'Acorde Bb con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Bb/Eb',
                    'imagen' => 'backend/assets/images/b_flat_e_flat.png',
                    'descripcion' => 'Acorde Bb con bajo en Eb.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Bb/C',
                    'imagen' => 'backend/assets/images/b_flat_c.png',
                    'descripcion' => 'Acorde Bb con bajo en C.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Bbm/G debe leerse como un acorde de si bemol menor con una nota G en el bajo.',
                'teoria' => [
                    'Bbm/Ab' => 'Es idéntico a la tercera inversión de Bbm7.',
                    'Bbm/G' => 'Es idéntico a la tercera inversión de Bbm6.',
                    'Bbm/Gb' => 'Es idéntico a Gbmaj7.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Bbm/Ab',
                    'imagen' => 'backend/assets/images/b_flat_m_a_flat.png',
                    'descripcion' => 'Acorde Bbm con bajo en Ab.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Bbm/G',
                    'imagen' => 'backend/assets/images/b_flat_m_g.png',
                    'descripcion' => 'Acorde Bbm con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Bbm/F#',
                    'imagen' => 'backend/assets/images/b_flat_m_g_flat.png',
                    'descripcion' => 'Acorde Bbm con bajo en F#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
    'B' => [
        'maj' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, B/A debe leerse como un acorde de Si mayor con una nota A en el bajo y B/G como un acorde de Si mayor con una nota G en el bajo.',
                'teoria' => [
                    'B/A' => 'B/A es idéntico a la tercera inversión de B7.',
                    'B/G' => 'B/G es idéntico a Gmaj7 (#5).',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'B/A',
                    'imagen' => 'backend/assets/images/b_a.png',
                    'descripcion' => 'Acorde B con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'B/G',
                    'imagen' => 'backend/assets/images/b_g.png',
                    'descripcion' => 'Acorde B con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'min' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Bm/A debe leerse como un acorde de Si menor con una nota La en el bajo y Bm/G como un acorde de Si menor con una nota Sol sostenido en el bajo.',
                'teoria' => [
                    'Bm/A' => 'Bm/A es idéntico a la tercera inversión de Bm7.',
                    'Bm/G' => 'Bm/G es idéntico a Gmaj7.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Bm/A',
                    'imagen' => 'backend/assets/images/bm_a.png',
                    'descripcion' => 'Acorde Bm con bajo en A.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Bm/G',
                    'imagen' => 'backend/assets/images/bm_g.png',
                    'descripcion' => 'Acorde Bm con bajo en G.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        '7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, B7/G# debe leerse como un acorde de B séptima con una nota G sostenido en el bajo y B7/E como un acorde de B séptima con una nota E en el bajo.',
                'teoria' => [
                    'B7/G#' => 'Podría verse como una inversión de B13 con la novena y la undécima omitidas.',
                    'B7/E' => 'B7/E podría verse como una inversión de B11 con la novena omitida.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'B7/G#',
                    'imagen' => 'backend/assets/images/b7_g_sharp.png',
                    'descripcion' => 'Acorde B7 con bajo en G#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'B7/E',
                    'imagen' => 'backend/assets/images/b7_e.png',
                    'descripcion' => 'Acorde A7 con bajo en F#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
        'm7' => [
            'explicacion_teoria' => [
                'explicacion' => 'La barra en el nombre del acorde indica que la segunda letra se agrega como una nueva nota grave. Por lo tanto, Bm7/E debe leerse como un acorde de Si menor séptima con una nota E en el bajo, y así sucesivamente. Tenga en cuenta que Bm7/E también sería posible tocarlo con dos manos sin inversión.',
                'teoria' => [
                    'Bm7/E' => 'Podría verse como una inversión de Bm11 con la novena omitida.',
                    'Bm7/G#' => 'Bm7/G# podría verse como una inversión de Bm13 con la novena y la undécima omitidas.',
                ],
            ],
            'alternativas' => [
                [
                    'nombre' => 'Bm7/E',
                    'imagen' => 'backend/assets/images/bm7_e.png',
                    'descripcion' => 'Acorde Bm7 con bajo en E.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
                [
                    'nombre' => 'Bm7/G#',
                    'imagen' => 'backend/assets/images/bm7_a_flat.png',
                    'descripcion' => 'Acorde Bm7 con bajo en G#.',
                    'digitaciones' => [
                        'izquierda_number' => '5-3-2-1',
                        'derecha_number' => '1-2-3-5',
                        'izquierda_imagen' => 'lh_5321.png',
                        'derecha_imagen' => 'rh_1235.png',
                    ],
                ],
            ],
        ],
    ],
];


