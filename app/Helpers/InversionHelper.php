<?php

namespace App\Helpers;

class InversionHelper
{
    // Inversiones definidas manualmente
    private static $inversiones = [
        'c' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/c.png',
                        'notas' => ['E', 'G', 'C'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/c_e.png',
                        'notas' => ['E', 'G', 'C'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/c_g.png',
                        'notas' => ['G', 'C', 'E'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/cm.png',
                        'notas' => ['E♭', 'G', 'C'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/cm_e_flat.png',
                        'notas' => ['E♭', 'G', 'C'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/cm_g.png',
                        'notas' => ['G', 'C', 'E♭'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/c7_e.png',
                        'notas' => ['E', 'G', 'B♭', 'C'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/c7_g.png',
                        'notas' => ['G', 'B♭', 'C', 'E'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/c7_b_flat.png',
                        'notas' => ['B♭', 'C', 'E', 'G'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/cm7_e_flat.png',
                        'notas' => ['E♭', 'G', 'B♭', 'C'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/cm7_g.png',
                        'notas' => ['G', 'B♭', 'C', 'E♭'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/cm7_b_flat.png',
                        'notas' => ['B♭', 'C', 'E♭', 'G'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/cmaj7_e.png',
                        'notas' => ['E', 'G', 'B', 'C'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/cmaj7_g.png',
                        'notas' => ['G', 'B', 'C', 'E'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/cmaj7_b.png',
                        'notas' => ['B', 'C', 'E', 'G'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/c6_e.png',
                        'notas' => ['E', 'G', 'A', 'C'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/c6_g.png',
                        'notas' => ['G', 'A', 'C', 'E'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/c6_a.png',
                        'notas' => ['A', 'C', 'E', 'G'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/cm6_e_flat.png',
                        'notas' => ['E♭', 'C', 'G', 'A'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/cm6_g.png',
                        'notas' => ['G', 'C', 'E♭', 'A'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/cm6_a.png',
                        'notas' => ['A', 'C', 'E♭', 'G'],
                    ],
                ],
            ],
        ],
        'c#' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/d_flat.png',
                        'notas' => ['C#', 'F', 'G#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_f.png',
                        'notas' => ['F', 'G#', 'C#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_a_flat.png',
                        'notas' => ['G#', 'C#', 'F'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/d_flat_m.png',
                        'notas' => ['C#', 'E', 'G#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m_e.png',
                        'notas' => ['E', 'G#', 'C#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m_a_flat.png',
                        'notas' => ['G#', 'C#', 'E'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_7_f.png',
                        'notas' => ['F', 'G#', 'B', 'C#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_7_a_flat.png',
                        'notas' => ['G#', 'B', 'C#', 'F'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_7_b.png',
                        'notas' => ['B', 'C#', 'F', 'G#'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m7_e.png', // Reemplaza con la imagen correcta
                        'notas' => ['E', 'G#', 'B', 'C#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m7_a_flat.png', // Reemplaza con la imagen correcta
                        'notas' => ['G#', 'B', 'C#', 'E'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m7_b.png', // Reemplaza con la imagen correcta
                        'notas' => ['B', 'C#', 'E', 'G#'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_maj7_f.png', // Reemplaza con la imagen correcta
                        'notas' => ['F', 'G#', 'C', 'C#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_maj7_a_flat.png', // Reemplaza con la imagen correcta
                        'notas' => ['G#', 'C', 'C#', 'F'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_maj7_c.png', // Reemplaza con la imagen correcta
                        'notas' => ['C', 'C#', 'F', 'G#'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_6_f.png', // Reemplaza con la imagen correcta
                        'notas' => ['F', 'G#', 'A#', 'C#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_6_a_flat.png', // Reemplaza con la imagen correcta
                        'notas' => ['G#', 'A#', 'C#', 'F'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_6_b_flat.png', // Reemplaza con la imagen correcta
                        'notas' => ['A#', 'C#', 'F', 'G#'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/dm_flat_6_e.png', // Reemplaza con la imagen correcta
                        'notas' => ['E', 'G#', 'A#', 'C#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/dm_flat_6_a_flat.png', // Reemplaza con la imagen correcta
                        'notas' => ['G#', 'A#', 'C#', 'E'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/dm_flat_6_b_flat.png', // Reemplaza con la imagen correcta
                        'notas' => ['A#', 'C#', 'E', 'G#'],
                    ],
                ],
            ],
        ],
        'db' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/d_flat.png',
                        'notas' => ['Db', 'F', 'Ab'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_f.png',
                        'notas' => ['F', 'Ab', 'Db'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_a_flat.png',
                        'notas' => ['Ab', 'Db', 'F'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/d_flat_m.png',
                        'notas' => ['Db', 'E', 'Ab'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m_e.png',
                        'notas' => ['E', 'Ab', 'Db'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m_a_flat.png',
                        'notas' => ['Ab', 'Db', 'E'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_7_f.png',
                        'notas' => ['F', 'Ab', 'B', 'Db'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_7_a_flat.png',
                        'notas' => ['Ab', 'B', 'Db', 'F'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_7_b.png',
                        'notas' => ['B', 'Db', 'F', 'Ab'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m7_e.png',
                        'notas' => ['E', 'Ab', 'B', 'Db'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m7_a_flat.png',
                        'notas' => ['Ab', 'B', 'Db', 'E'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_m7_b.png',
                        'notas' => ['B', 'Db', 'E', 'Ab'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_maj7_f.png',
                        'notas' => ['F', 'Ab', 'C', 'Db'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_maj7_a_flat.png',
                        'notas' => ['Ab', 'C', 'Db', 'F'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_maj7_c.png',
                        'notas' => ['C', 'Db', 'F', 'Ab'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_6_f.png',
                        'notas' => ['F', 'Ab', 'Bb', 'Db'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_flat_6_a_flat.png',
                        'notas' => ['Ab', 'Bb', 'Db', 'F'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d_flat_6_b_flat.png',
                        'notas' => ['Bb', 'Db', 'F', 'Ab'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/dm_flat_6_e.png',
                        'notas' => ['E', 'Ab', 'Bb', 'Db'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/dm_flat_6_a_flat.png',
                        'notas' => ['Ab', 'Bb', 'Db', 'E'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/dm_flat_6_b_flat.png',
                        'notas' => ['Bb', 'Db', 'E', 'Ab'],
                    ],
                ],
            ],
        ],
        'd' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/d.png',
                        'notas' => ['D', 'F#', 'A'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d_g_flat.png',
                        'notas' => ['F#', 'A', 'D'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d_a.png',
                        'notas' => ['A', 'D', 'F#'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/dm.png',
                        'notas' => ['D', 'F', 'A'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/dm_f.png',
                        'notas' => ['F', 'A', 'D'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/dm_a.png',
                        'notas' => ['A', 'D', 'F'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d7_f_sharp.png',
                        'notas' => ['F#', 'A', 'C', 'D'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d7_a.png',
                        'notas' => ['A', 'C', 'D', 'F#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d7_c.png',
                        'notas' => ['C', 'D', 'F#', 'A'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/dm7_f.png',
                        'notas' => ['F', 'A', 'C', 'D'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/dm7_a.png',
                        'notas' => ['A', 'C', 'D', 'F'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/dm7_c.png',
                        'notas' => ['C', 'D', 'F', 'A'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/dmaj7_f_sharp.png',
                        'notas' => ['F#', 'A', 'C#', 'D'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/dmaj7_a.png',
                        'notas' => ['A', 'C#', 'D', 'F#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/dmaj7_c_sharp.png',
                        'notas' => ['C#', 'D', 'F#', 'A'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/d6_g_flat.png',
                        'notas' => ['F#', 'A', 'B', 'D'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/d6_a.png',
                        'notas' => ['A', 'B', 'D', 'F#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/d6_b.png',
                        'notas' => ['B', 'D', 'F#', 'A'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/dm6_f.png',
                        'notas' => ['F', 'D', 'A', 'B'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/dm6_a.png',
                        'notas' => ['A', 'D', 'F', 'B'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/dm6_b.png',
                        'notas' => ['B', 'D', 'F', 'A'],
                    ],
                ],
            ],
        ],
        'd#' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/e_flat.png',
                        'notas' => ['D#', 'G', 'A#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_g.png',
                        'notas' => ['G', 'A#', 'D#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_b_flat.png',
                        'notas' => ['A#', 'D#', 'G'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/e_flat_m.png',
                        'notas' => ['D#', 'F#', 'A#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m_g_flat.png',
                        'notas' => ['F#', 'A#', 'D#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m_b_flat.png',
                        'notas' => ['A#', 'D#', 'F#'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_7.png',
                        'notas' => ['D#', 'G', 'A#', 'C#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_7_g.png',
                        'notas' => ['G', 'A#', 'C#', 'D#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_7_b_flat.png',
                        'notas' => ['A#', 'C#', 'D#', 'G'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m7_g_flat.png',
                        'notas' => ['F#', 'A#', 'C#', 'D#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m7_b_flat.png',
                        'notas' => ['A#', 'C#', 'D#', 'F#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m7_d_flat.png',
                        'notas' => ['C#', 'D#', 'F#', 'A#'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_maj7_g.png',
                        'notas' => ['G', 'A#', 'D', 'D#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_maj7_b_flat.png',
                        'notas' => ['A#', 'D', 'D#', 'G'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_maj7_d.png',
                        'notas' => ['D', 'D#', 'G', 'A#'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_6_g.png',
                        'notas' => ['G', 'A#', 'C', 'D#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_6_b_flat.png',
                        'notas' => ['A#', 'C', 'D#', 'G'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_6_c.png',
                        'notas' => ['C', 'D#', 'G', 'A#'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/em_flat_6_g_flat.png',
                        'notas' => ['F#', 'A#', 'C', 'D#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/em_flat_6_b_flat.png',
                        'notas' => ['A#', 'C', 'D#', 'F#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/em_flat_6_c.png',
                        'notas' => ['C', 'D#', 'F#', 'A#'],
                    ],
                ],
            ],
        ],
        'eb' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/e_flat.png',
                        'notas' => ['Eb', 'G', 'Bb'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_g.png',
                        'notas' => ['G', 'Bb', 'Eb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_b_flat.png',
                        'notas' => ['Bb', 'Eb', 'G'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/e_flat_m.png',
                        'notas' => ['Eb', 'Gb', 'Bb'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m_g_flat.png',
                        'notas' => ['Gb', 'Bb', 'Eb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m_b_flat.png',
                        'notas' => ['Bb', 'Eb', 'Gb'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_7.png',
                        'notas' => ['Eb', 'G', 'Bb', 'Db'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_7_g.png',
                        'notas' => ['G', 'Bb', 'Db', 'Eb'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_7_b_flat.png',
                        'notas' => ['Bb', 'Db', 'Eb', 'G'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m7_g_flat.png',
                        'notas' => ['Gb', 'Bb', 'Db', 'Eb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m7_b_flat.png',
                        'notas' => ['Bb', 'Db', 'Eb', 'Gb'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_m7_d_flat.png',
                        'notas' => ['Db', 'Eb', 'Gb', 'Bb'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_maj7_g.png',
                        'notas' => ['G', 'Bb', 'D', 'Eb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_maj7_b_flat.png',
                        'notas' => ['Bb', 'D', 'Eb', 'G'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_maj7_d.png',
                        'notas' => ['D', 'Eb', 'G', 'Bb'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_6_g.png',
                        'notas' => ['G', 'Bb', 'C', 'Eb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_flat_6_b_flat.png',
                        'notas' => ['Bb', 'C', 'Eb', 'G'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e_flat_6_c.png',
                        'notas' => ['C', 'Eb', 'G', 'Bb'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/em_flat_6_g_flat.png',
                        'notas' => ['Gb', 'Bb', 'C', 'Eb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/em_flat_6_b_flat.png',
                        'notas' => ['Bb', 'C', 'Eb', 'Gb'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/em_flat_6_c.png',
                        'notas' => ['C', 'Eb', 'Gb', 'Bb'],
                    ],
                ],
            ],
        ],
        'e' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/e.png',
                        'notas' => ['E', 'G#', 'B'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e_g_sharp.png',
                        'notas' => ['G#', 'B', 'E'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e_b.png',
                        'notas' => ['B', 'E', 'G#'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/em.png',
                        'notas' => ['E', 'G', 'B'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/em_g.png',
                        'notas' => ['G', 'B', 'E'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/em_b.png',
                        'notas' => ['B', 'E', 'G'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e7_g_sharp.png',
                        'notas' => ['G#', 'B', 'D', 'E'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e7_b.png',
                        'notas' => ['B', 'D', 'E', 'G#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e7_d.png',
                        'notas' => ['D', 'E', 'G#', 'B'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/em7_g.png',
                        'notas' => ['G', 'B', 'D', 'E'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/em7_b.png',
                        'notas' => ['B', 'D', 'E', 'G'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/em7_d.png',
                        'notas' => ['D', 'E', 'G', 'B'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/emaj7_a_flat.png',
                        'notas' => ['G#', 'B', 'D#', 'E'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/emaj7_b.png',
                        'notas' => ['B', 'D#', 'E', 'G#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/emaj7_e_flat.png',
                        'notas' => ['D#', 'E', 'G#', 'B'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/e6_a_flat.png',
                        'notas' => ['G#', 'B', 'C#', 'E'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/e6_b.png',
                        'notas' => ['B', 'C#', 'E', 'G#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/e6_d_flat.png',
                        'notas' => ['C#', 'E', 'G#', 'B'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/em6_g.png',
                        'notas' => ['G', 'B', 'C#', 'E'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/em6_b.png',
                        'notas' => ['B', 'C#', 'E', 'G'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/em6_d_flat.png',
                        'notas' => ['C#', 'E', 'G', 'B'],
                    ],
                ],
            ],
        ],
        'f' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/f.png',
                        'notas' => ['F', 'A', 'C'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/f_a.png',
                        'notas' => ['A', 'C', 'F'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/f_c.png',
                        'notas' => ['C', 'F', 'A'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/fm.png',
                        'notas' => ['F', 'A♭', 'C'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/fm_a_flat.png',
                        'notas' => ['A♭', 'C', 'F'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/fm_c.png',
                        'notas' => ['C', 'F', 'A♭'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/f7_a.png',
                        'notas' => ['A', 'C', 'E♭', 'F'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/f7_c.png',
                        'notas' => ['C', 'E♭', 'F', 'A'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/f7_e_flat.png',
                        'notas' => ['E♭', 'F', 'A', 'C'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/fm7_a_flat.png',
                        'notas' => ['A♭', 'C', 'E♭', 'F'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/fm7_c.png',
                        'notas' => ['C', 'E♭', 'F', 'A♭'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/fm7_e_flat.png',
                        'notas' => ['E♭', 'F', 'A♭', 'C'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/fmaj7_a.png',
                        'notas' => ['A', 'C', 'E', 'F'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/fmaj7_c.png',
                        'notas' => ['C', 'E', 'F', 'A'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/fmaj7_e.png',
                        'notas' => ['E', 'F', 'A', 'C'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/f6_a.png',
                        'notas' => ['A', 'C', 'D', 'F'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/f6_c.png',
                        'notas' => ['C', 'D', 'F', 'A'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/f6_d.png',
                        'notas' => ['D', 'F', 'A', 'C'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/fm6_a_flat.png',
                        'notas' => ['A♭', 'C', 'D', 'F'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/fm6_c.png',
                        'notas' => ['C', 'D', 'F', 'A♭'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/fm6_d.png',
                        'notas' => ['D', 'F', 'A♭', 'C'],
                    ],
                ],
            ],
        ],
        'f#' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/g_flat.png',
                        'notas' => ['F#', 'A#', 'C#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_b_flat.png',
                        'notas' => ['A#', 'C#', 'F#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_d_flat.png',
                        'notas' => ['C#', 'F#', 'A#'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/g_flat_m.png',
                        'notas' => ['F#', 'A', 'C#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m_a.png',
                        'notas' => ['A', 'C#', 'F#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m_d_flat.png',
                        'notas' => ['C#', 'F#', 'A'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_7_b_flat.png',
                        'notas' => ['A#', 'C#', 'E', 'F#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_7_d_flat.png',
                        'notas' => ['C#', 'E', 'F#', 'A#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_7_e.png',
                        'notas' => ['E', 'F#', 'A#', 'C#'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m7_a.png',
                        'notas' => ['A', 'C#', 'E', 'F#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m7_d_flat.png',
                        'notas' => ['C#', 'E', 'F#', 'A'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m7_e.png',
                        'notas' => ['E', 'F#', 'A', 'C#'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_maj7_b_flat.png',
                        'notas' => ['A#', 'C#', 'F', 'F#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_maj7_d_flat.png',
                        'notas' => ['C#', 'F', 'F#', 'A#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_maj7_f.png',
                        'notas' => ['F', 'F#', 'A#', 'C#'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_6_b_flat.png',
                        'notas' => ['A#', 'C#', 'D#', 'F#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_6_d_flat.png',
                        'notas' => ['C#', 'D#', 'F#', 'A#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_6_e_flat.png',
                        'notas' => ['D#', 'F#', 'A#', 'C#'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/gm_flat_6_a.png',
                        'notas' => ['A', 'C#', 'D#', 'F#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/gm_flat_6_d_flat.png',
                        'notas' => ['C#', 'D#', 'F#', 'A'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/gm_flat_6_e_flat.png',
                        'notas' => ['D#', 'F#', 'A', 'C#'],
                    ],
                ],
            ],
        ],
        'gb' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/g_flat.png',
                        'notas' => ['Gb', 'Bb', 'Db'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_b_flat.png',
                        'notas' => ['Bb', 'Db', 'Gb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_d_flat.png',
                        'notas' => ['Db', 'Gb', 'Bb'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/g_flat_m.png',
                        'notas' => ['Gb', 'A', 'Db'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m_a.png',
                        'notas' => ['A', 'Db', 'Gb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m_d_flat.png',
                        'notas' => ['Db', 'Gb', 'A'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_7_b_flat.png',
                        'notas' => ['Bb', 'Db', 'E', 'Gb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_7_d_flat.png',
                        'notas' => ['Db', 'E', 'Gb', 'Bb'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_7_e.png',
                        'notas' => ['E', 'Gb', 'Bb', 'Db'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m7_a.png',
                        'notas' => ['A', 'Db', 'E', 'Gb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m7_d_flat.png',
                        'notas' => ['Db', 'E', 'Gb', 'A'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_m7_e.png',
                        'notas' => ['E', 'Gb', 'A', 'Db'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_maj7_b_flat.png',
                        'notas' => ['Bb', 'Db', 'F', 'Gb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_maj7_d_flat.png',
                        'notas' => ['Db', 'F', 'Gb', 'Bb'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_maj7_f.png',
                        'notas' => ['F', 'Gb', 'Bb', 'Db'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_6_b_flat.png',
                        'notas' => ['Bb', 'Db', 'Eb', 'Gb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_flat_6_d_flat.png',
                        'notas' => ['Db', 'Eb', 'Gb', 'Bb'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g_flat_6_e_flat.png',
                        'notas' => ['Eb', 'Gb', 'Bb', 'Db'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/gm_flat_6_a.png',
                        'notas' => ['A', 'Db', 'Eb', 'Gb'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/gm_flat_6_d_flat.png',
                        'notas' => ['Db', 'Eb', 'Gb', 'A'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/gm_flat_6_e_flat.png',
                        'notas' => ['Eb', 'Gb', 'A', 'Db'],
                    ],
                ],
            ],
        ],
        'g' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/g.png',
                        'notas' => ['G', 'B', 'D'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g_b.png',
                        'notas' => ['B', 'D', 'G'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g_d.png',
                        'notas' => ['D', 'G', 'B'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/gm.png',
                        'notas' => ['G', 'B♭', 'D'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/gm_b_flat.png',
                        'notas' => ['B♭', 'D', 'G'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/gm_d.png',
                        'notas' => ['D', 'G', 'B♭'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g7_b.png',
                        'notas' => ['B', 'D', 'F', 'G'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g7_d.png',
                        'notas' => ['D', 'F', 'G', 'B'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g7_f.png',
                        'notas' => ['F', 'G', 'B', 'D'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/gm7_b_flat.png',
                        'notas' => ['B♭', 'D', 'F', 'G'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/gm7_d.png',
                        'notas' => ['D', 'F', 'G', 'B♭'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/gm7_f.png',
                        'notas' => ['F', 'G', 'B♭', 'D'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/gmaj7_b.png',
                        'notas' => ['B', 'D', 'F#', 'G'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/gmaj7_d.png',
                        'notas' => ['D', 'F#', 'G', 'B'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/gmaj7_g_flat.png',
                        'notas' => ['F#', 'G', 'B', 'D'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/g6_b.png',
                        'notas' => ['B', 'D', 'E', 'G'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/g6_d.png',
                        'notas' => ['D', 'E', 'G', 'B'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/g6_e.png',
                        'notas' => ['E', 'G', 'B', 'D'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/gm6_b_flat.png',
                        'notas' => ['B♭', 'D', 'E', 'G'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/gm6_d.png',
                        'notas' => ['D', 'E', 'G', 'B♭'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/gm6_e.png',
                        'notas' => ['E', 'G', 'B♭', 'D'],
                    ],
                ],
            ],
        ],
        'g#' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/a_flat.png',
                        'notas' => ['G#', 'B#', 'D#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_c.png',
                        'notas' => ['B#', 'D#', 'G#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_e_flat.png',
                        'notas' => ['D#', 'G#', 'B#'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/a_flat_m.png',
                        'notas' => ['G#', 'B', 'D#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images//a_flat_m_b.png',
                        'notas' => ['B', 'D#', 'G#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_m_e_flat.png',
                        'notas' => ['D#', 'G#', 'B'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_7_c.png',
                        'notas' => ['C', 'D#', 'F#', 'G#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_7_e_flat.png',
                        'notas' => ['D#', 'F#', 'G#', 'C'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_7_g_flat.png',
                        'notas' => ['F#', 'G#', 'C', 'D#'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_m7_b.png',
                        'notas' => ['B', 'D#', 'F#', 'G#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_m7_e_flat.png',
                        'notas' => ['D#', 'F#', 'G#', 'B'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_m7_g_flat.png',
                        'notas' => ['F#', 'G#', 'B', 'D#'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_maj7_c.png',
                        'notas' => ['C', 'D#', 'G', 'G#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_maj7_e_flat.png',
                        'notas' => ['D#', 'G', 'G#', 'C'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_maj7_g.png',
                        'notas' => ['G', 'G#', 'C', 'D#'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_6_c.png',
                        'notas' => ['C', 'D#', 'F', 'G#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_6_e_flat.png',
                        'notas' => ['D#', 'F', 'G#', 'C'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_6_f.png',
                        'notas' => ['F', 'G#', 'C', 'D#'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/am_flat_6_b.png',
                        'notas' => ['B', 'D#', 'F', 'G#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/am_flat_6_e_flat.png',
                        'notas' => ['D#', 'F', 'G#', 'B'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/am_flat_6_f.png',
                        'notas' => ['F', 'G#', 'B', 'D#'],
                    ],
                ],
            ],
        ],
        'ab' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/ab.png',
                        'notas' => ['A♭', 'C', 'E♭'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_c.png',
                        'notas' => ['C', 'E♭', 'A♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_e_flat.png',
                        'notas' => ['E♭', 'A♭', 'C'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/abm.png',
                        'notas' => ['A♭', 'B', 'E♭'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_m_b.png',
                        'notas' => ['B', 'E♭', 'A♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_m_e_flat.png',
                        'notas' => ['E♭', 'A♭', 'B'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_7_c.png',
                        'notas' => ['C', 'E♭', 'G♭', 'A♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_7_e_flat.png',
                        'notas' => ['E♭', 'G♭', 'A♭', 'C'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_7_g_flat.png',
                        'notas' => ['G♭', 'A♭', 'C', 'E♭'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_m7_b.png',
                        'notas' => ['B', 'E♭', 'G♭', 'A♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_m7_e_flat.png',
                        'notas' => ['E♭', 'G♭', 'A♭', 'B'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_m7_g_flat.png',
                        'notas' => ['G♭', 'A♭', 'B', 'E♭'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_maj7_c.png',
                        'notas' => ['C', 'E♭', 'G', 'A♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_maj7_e_flat.png',
                        'notas' => ['E♭', 'G', 'A♭', 'C'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_maj7_g.png',
                        'notas' => ['G', 'A♭', 'C', 'E♭'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_6_c.png',
                        'notas' => ['C', 'E♭', 'F', 'A♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_flat_6_e_flat.png',
                        'notas' => ['E♭', 'F', 'A♭', 'C'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a_flat_6_f.png',
                        'notas' => ['F', 'A♭', 'C', 'E♭'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/am_flat_6_b.png',
                        'notas' => ['B', 'E♭', 'F', 'A♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/am_flat_6_e_flat.png',
                        'notas' => ['E♭', 'F', 'A♭', 'B'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/am_flat_6_f.png',
                        'notas' => ['F', 'A♭', 'B', 'E♭'],
                    ],
                ],
            ],
        ],
        'a' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/a.png',
                        'notas' => ['A', 'C#', 'E'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a_c_sharp.png',
                        'notas' => ['C#', 'E', 'A'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a_e.png',
                        'notas' => ['E', 'A', 'C#'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/am.png',
                        'notas' => ['A', 'C', 'E'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/am_c.png',
                        'notas' => ['C', 'E', 'A'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/am_e.png',
                        'notas' => ['E', 'A', 'C'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a7_c_sharp.png',
                        'notas' => ['C#', 'E', 'G', 'A'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a7_e.png',
                        'notas' => ['E', 'G', 'A', 'C#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a7_g.png',
                        'notas' => ['G', 'A', 'C#', 'E'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/am7_c.png',
                        'notas' => ['C', 'E', 'G', 'A'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/am7_e.png',
                        'notas' => ['E', 'G', 'A', 'C'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/am7_g.png',
                        'notas' => ['G', 'A', 'C', 'E'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/amaj7_c_sharp.png',
                        'notas' => ['C#', 'E', 'G#', 'A'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/amaj7_e.png',
                        'notas' => ['E', 'G#', 'A', 'C#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/amaj7_g_sharp.png',
                        'notas' => ['G#', 'A', 'C#', 'E'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/a6_c_sharp.png',
                        'notas' => ['C#', 'E', 'F#', 'A'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/a6_e.png',
                        'notas' => ['E', 'F#', 'A', 'C#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/a6_f_sharp.png',
                        'notas' => ['F#', 'A', 'C#', 'E'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/am6_c.png',
                        'notas' => ['C', 'E', 'F#', 'A'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/am6_e.png',
                        'notas' => ['E', 'F#', 'A', 'C'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/am6_f_sharp.png',
                        'notas' => ['F#', 'A', 'C', 'E'],
                    ],
                ],
            ],
        ],
        'a#' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/b_flat.png',
                        'notas' => ['A#', 'D', 'E#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_d.png',
                        'notas' => ['D', 'E#', 'A#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_f.png',
                        'notas' => ['E#', 'A#', 'D'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/b_flat_m.png',
                        'notas' => ['A#', 'C#', 'F'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m_d_flat.png',
                        'notas' => ['C#', 'F', 'A#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m_f.png',
                        'notas' => ['F', 'A#', 'C#'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_7_d.png',
                        'notas' => ['D', 'F', 'G#', 'A#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_7_f.png',
                        'notas' => ['F', 'G#', 'A#', 'D'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_7_a_flat.png',
                        'notas' => ['G#', 'A#', 'D', 'F'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m7_d_flat.png',
                        'notas' => ['C#', 'F', 'G#', 'A#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m7_f.png',
                        'notas' => ['F', 'G#', 'A#', 'C#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m7_a_flat.png',
                        'notas' => ['G#', 'A#', 'C#', 'F'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_maj7_d.png',
                        'notas' => ['D', 'F', 'A', 'A#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_maj7_f.png',
                        'notas' => ['F', 'A', 'A#', 'D'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_maj7_a.png',
                        'notas' => ['A', 'A#', 'D', 'F'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_6_d.png',
                        'notas' => ['D', 'F', 'G', 'A#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_6_f.png',
                        'notas' => ['F', 'G', 'A#', 'D'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_6_g.png',
                        'notas' => ['G', 'A#', 'D', 'F'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/bm_flat_6_d_flat.png',
                        'notas' => ['C#', 'F', 'G', 'A#'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/bm_flat_6_f.png',
                        'notas' => ['F', 'G', 'A#', 'C#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/bm_flat_6_g.png',
                        'notas' => ['G', 'A#', 'C#', 'F'],
                    ],
                ],
            ],
        ],
        'bb' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/bb.png',
                        'notas' => ['B♭', 'D', 'F'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_d.png',
                        'notas' => ['D', 'F', 'B♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_f.png',
                        'notas' => ['F', 'B♭', 'D'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/bbm.png',
                        'notas' => ['B♭', 'D♭', 'F'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m_d_flat.png',
                        'notas' => ['D♭', 'F', 'B♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m_f.png',
                        'notas' => ['F', 'B♭', 'D♭'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_7_d.png',
                        'notas' => ['D', 'F', 'A♭', 'B♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_7_f.png',
                        'notas' => ['F', 'A♭', 'B♭', 'D'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_7_a_flat.png',
                        'notas' => ['A♭', 'B♭', 'D', 'F'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m7_d_flat.png',
                        'notas' => ['D♭', 'F', 'A♭', 'B♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m7_f.png',
                        'notas' => ['F', 'A♭', 'B♭', 'D♭'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_m7_a_flat.png',
                        'notas' => ['A♭', 'B♭', 'D♭', 'F'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_maj7_d.png',
                        'notas' => ['D', 'F', 'A', 'B♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_maj7_f.png',
                        'notas' => ['F', 'A', 'B♭', 'D'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_maj7_a.png',
                        'notas' => ['A', 'B♭', 'D', 'F'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_6_d.png',
                        'notas' => ['D', 'F', 'G', 'B♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_flat_6_f.png',
                        'notas' => ['F', 'G', 'B♭', 'D'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b_flat_6_g.png',
                        'notas' => ['G', 'B♭', 'D', 'F'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/bm_flat_6_d_flat.png',
                        'notas' => ['D♭', 'F', 'G', 'B♭'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/bm_flat_6_f.png',
                        'notas' => ['F', 'G', 'B♭', 'D♭'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/bm_flat_6_g.png',
                        'notas' => ['G', 'B♭', 'D♭', 'F'],
                    ],
                ],
            ],
        ],
        'b' => [
            'maj' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/b.png',
                        'notas' => ['B', 'D#', 'F#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b_d_sharp.png',
                        'notas' => ['D#', 'F#', 'B'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b_f_sharp.png',
                        'notas' => ['F#', 'B', 'D#'],
                    ],
                ],
            ],
            'min' => [
                'inversiones' => [
                    [
                        'nombre' => 'Fundamental',
                        'imagen' => 'backend/assets/images/bm.png',
                        'notas' => ['B', 'D', 'F#'],
                    ],
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/bm_d.png',
                        'notas' => ['D', 'F#', 'B'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/bm_f_sharp.png',
                        'notas' => ['F#', 'B', 'D'],
                    ],
                ],
            ],
            '7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b7_d_sharp.png',
                        'notas' => ['D#', 'F#', 'A', 'B'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b7_f_sharp.png',
                        'notas' => ['F#', 'A', 'B', 'D#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b7_a.png',
                        'notas' => ['A', 'B', 'D#', 'F#'],
                    ],
                ],
            ],
            'm7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/bm7_d.png',
                        'notas' => ['D', 'F#', 'A', 'B'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/bm7_g_flat.png',
                        'notas' => ['F#', 'A', 'B', 'D'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/bm7_a.png',
                        'notas' => ['A', 'B', 'D', 'F#'],
                    ],
                ],
            ],
            'maj7' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/bmaj7_e_flat.png',
                        'notas' => ['D#', 'F#', 'A#', 'B'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/bmaj7_g_flat.png',
                        'notas' => ['F#', 'A#', 'B', 'D#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/bmaj7_b_flat.png',
                        'notas' => ['A#', 'B', 'D#', 'F#'],
                    ],
                ],
            ],
            '6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/b6_e_flat.png',
                        'notas' => ['D#', 'F#', 'G#', 'B'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/b6_g_flat.png',
                        'notas' => ['F#', 'G#', 'B', 'D#'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/b6_a_flat.png',
                        'notas' => ['G#', 'B', 'D#', 'F#'],
                    ],
                ],
            ],
            'm6' => [
                'inversiones' => [
                    [
                        'nombre' => 'Primera Inversión',
                        'imagen' => 'backend/assets/images/bm6_d.png',
                        'notas' => ['D', 'F#', 'G#', 'B'],
                    ],
                    [
                        'nombre' => 'Segunda Inversión',
                        'imagen' => 'backend/assets/images/bm6_g_flat.png',
                        'notas' => ['F#', 'G#', 'B', 'D'],
                    ],
                    [
                        'nombre' => 'Tercera Inversión',
                        'imagen' => 'backend/assets/images/bm6_a_flat.png',
                        'notas' => ['G#', 'B', 'D', 'F#'],
                    ],
                ],
            ],
        ],

    ];

    /**
     * Obtener las inversiones para una nota y tipo de acorde.
     *
     * @param  string  $nota  Nota principal.
     * @param  string  $tipoAcorde  Tipo de acorde ('maj', 'min', etc.).
     * @return array
     */
    public static function getInversiones($nota, $tipoAcorde)
    {
        return self::$inversiones[$nota][$tipoAcorde]['inversiones'] ?? [];
    }

    /**
     * Generar inversiones para una nota y tipo de acorde.
     *
     * @param  string  $nota  Nota principal.
     * @param  string  $tipoAcorde  Tipo de acorde ('maj', 'min', etc.).
     * @return array
     */
    public static function generateInversions($nota, $tipoAcorde)
    {
        // Verificar si existen inversiones manuales para esta nota y tipo de acorde
        $manualInversions = self::getInversiones($nota, $tipoAcorde);
        if (! empty($manualInversions)) {
            return $manualInversions;
        }

        // Generar inversiones automáticas (si no existen manuales)
        $triada = match ($tipoAcorde) {
            'maj' => self::getMajorTriad($nota),
            'min' => self::getMinorTriad($nota),
            default => [],
        };

        $inversions = [];
        foreach ($triada as $index => $notas) {
            $inversions[] = [
                'nombre' => self::getInversionName($index + 1),
                'imagen' => "backend/assets/images/{$nota}_{$index}.png", // Ruta ejemplo
                'notas' => $notas,
            ];
        }

        return $inversions;
    }

    /**
     * Obtener la triada mayor para una nota.
     *
     * @param  string  $nota  Nota principal.
     * @return array
     */
    private static function getMajorTriad($nota)
    {
        $majorTriads = [
            'c' => ['C', 'E', 'G'],
            'd' => ['D', 'F#', 'A'],
            // Agregar más triadas mayores aquí
        ];

        return $majorTriads[$nota] ?? [];
    }

    /**
     * Obtener la triada menor para una nota.
     *
     * @param  string  $nota  Nota principal.
     * @return array
     */
    private static function getMinorTriad($nota)
    {
        $minorTriads = [
            'c' => ['C', 'E♭', 'G'],
            'd' => ['D', 'F', 'A'],
            // Agregar más triadas menores aquí
        ];

        return $minorTriads[$nota] ?? [];
    }

    /**
     * Obtener el nombre de la inversión.
     *
     * @param  int  $index  Índice de la inversión (1, 2, 3...).
     * @return string
     */
    private static function getInversionName($index)
    {
        $names = ['Fundamental', 'Primera Inversión', 'Segunda Inversión'];

        return $names[$index - 1] ?? "Inversión {$index}";
    }
}
