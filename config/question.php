<?php
// test thank you Kagawa-san
return [
    '1' => [
        // ビューに表示させる内容
        'content' => '人の遅刻は許せない方だ',

        'answer' => [
            // ビューの「はい」ボタンに以下の設定値を埋め込む
            'yes' => [
                // 次の質問がある場合はquestionを指定
                'path' => 'question',
                // 次の質問のquestion_id
                'id' => '2',
            ],
            // ビューの「いいえ」ボタンに以下の設定値を埋め込む
            'no' => [
                'path' => 'question',
                'id' => '3',
            ],
        ],
    ],

    '2' => [
        'content' => '割とネガティブな方だと思う',
        'answer' => [
            'yes' => [
                'path' => 'question',
                'id' => '4',
            ],
            'no' => [
                'path' => 'question',
                'id' => '3',
            ],
        ],
    ],

    '3' => [
        'content' => '人の髪型などちょっとしたことにも気がつく方だ',
        'answer' => [
            'yes' => [
                'path' => 'question',
                'id' => '6',
            ],
            'no' => [
                'path' => 'question',
                'id' => '7',
            ],
        ],
    ],

    '4' => [
        'content' => '悩みはいつも行ってる皮膚科の先生に相談しがちだ',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '1',
            ],
            'no' => [
                'path' => 'question',
                'id' => '5',
            ],
        ],
    ],

    '5' => [
        'content' => '雨降ったら全部終わりですからね',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '2',
            ],
            'no' => [
                'path' => 'result',
                'id' => '3',
            ],
        ],
    ],

    '6' => [
        'content' => '正直自分の顔が好きだ',
        'answer' => [
            'yes' => [
                'path' => 'question',
                'id' => '8',
            ],
            'no' => [
                'path' => 'question',
                'id' => '11',
            ],
        ],
    ],

    '7' => [
        'content' => '整理整頓は得意だ',
        'answer' => [
            'yes' => [
                'path' => 'question',
                'id' => '16',
            ],
            'no' => [
                'path' => 'question',
                'id' => '21',
            ],
        ],
    ],

    '8' => [
        'content' => '鏡を見ていることがよくある',
        'answer' => [
            'yes' => [
                'path' => 'question',
                'id' => '9',
            ],
            // 'no' => [
            //     'path' => 'question',
            //     'id' => '16',
            // ],
        ],
    ],

    '9' => [
        'content' => '「おはよう」とつぶやいたら「お前は目覚めるな」とリプライが来たことがある',
        'answer' => [
            'yes' => [
                'path' => 'question',
                'id' => '10',
            ],
            // 'no' => [
            //     'path' => 'question',
            //     'id' => '16',
            // ],
        ],
    ],

    '10' => [
        'content' => '好感度はゴキブリとどっこいどっこいだ',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '4',
            ],
            // 'no' => [
            //     'path' => 'question',
            //     'id' => '16',
            // ],
        ],
    ],

    '11' => [
        'content' => 'ハンバーガー屋ができているのを見ると興奮する',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '5',
            ],
            'no' => [
                'path' => 'question',
                'id' => '12',
            ],
        ],
    ],
    
    '12' => [
        'content' => 'おかんが好物をすぐ忘れてしまいがちだ',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '6',
            ],
            'no' => [
                'path' => 'question',
                'id' => '13',
            ],
        ],
    ],

    '13' => [
        'content' => '最近髪の毛が薄くなってきた',
        'answer' => [
            'yes' => [
                'path' => 'question',
                'id' => '23',
            ],
            'no' => [
                'path' => 'question',
                'id' => '15',
            ],
        ],
    ],

    '14' => [
        'content' => '斎藤さんだぞ',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '7',
            ],
            'no' => [
                'path' => 'result',
                'id' => '8',
            ],
        ],
    ],

    '15' => [
        'content' => '人がやっていることを真似したくなってしまう',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '9',
            ],
            'no' => [
                'path' => 'result',
                'id' => '10',
            ],
        ],
    ],

    '16' => [
        'content' => '高級フレンチに行くことになったがマナーに不安がある',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '11',
            ],
            'no' => [
                'path' => 'question',
                'id' => '17',
            ],
        ],
    ],

    '17' => [
        'content' => '絶対に笑わせたい人がいる',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '11',
            ],
            'no' => [
                'path' => 'question',
                'id' => '18',
            ],
        ],
    ],

    '18' => [
        'content' => '意地でもつり革につかまりたくない',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '11',
            ],
            'no' => [
                'path' => 'question',
                'id' => '19',
            ],
        ],
    ],

    '19' => [
        'content' => 'ゲームを作るのが趣味だ',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '11',
            ],
            'no' => [
                'path' => 'question',
                'id' => '20',
            ],
        ],
    ],

    '20' => [
        'content' => '逆にお前村上だろ',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '11',
            ],
            'no' => [
                'path' => 'result',
                'id' => '11',
            ],
        ],
    ],

    '21' => [
        'content' => '休みの日はゴロゴロしていることが多い',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '12',
            ],
            'no' => [
                'path' => 'question',
                'id' => '22',
            ],
        ],
    ],

    '22' => [
        'content' => '自転車のチリンチリンを盗まれたことがある',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '13',
            ],
            'no' => [
                'path' => 'result',
                'id' => '14',
            ],
        ],
    ],

    '23' => [
        'content' => 'そもそも髪の毛なんてなかった',
        'answer' => [
            'yes' => [
                'path' => 'result',
                'id' => '15',
            ],
            'no' => [
                'path' => 'question',
                'id' => '14',
            ],
        ],
    ],

];

// questions
// １ 人の遅刻は許せない方だ
// ２ 割とネガティブな方だと思う
// ３ 人の髪型などちょっとしたことにも気がつく方だ
// ４　悩みはいつも行ってる皮膚科の先生に相談しがちだ
// ５　雨降ったら全部終わりですからね
// ６　正直自分の顔が好きだ
// ７　整理整頓は得意だ
// ８　鏡を見ていることがよくある
// ９　「おはよう」とつぶやいたら「お前は目覚めるな」とリプライが来たことがある
// １０　好感度はゴキブリとどっこいどっこいだ
// １１　ハンバーガー屋ができているのを見ると興奮する
// １２　おかんが好物をすぐ忘れてしまいがちだ
// １３　最近髪の毛が薄くなってきた
// １４　斎藤さんだぞ
// １５　人がやっていることを真似したくなってしまう
// １６　高級フレンチに行くことになったがマナーに不安がある
// １７　絶対に笑わせたい人がいる
// １８　意地でもつり革につかまりたくない
// １９　ゲームを作るのが趣味だ
// ２０　逆にお前村上だろ
// ２１　休みの日はゴロゴロしていることが多い
// ２２　自転車のチリンチリンを盗まれたことがある
// ２３　そもそも髪の毛なんてなかった

//results
// １　ブラックマヨネーズ　吉田
// ２　とろサーモン　久保田
// ３　NONSTYLE　石田
// ４　NONSTYLE　井上
// ５　サンドウィッチマン　伊達
// ６　ミルクボーイ　駒場
// ７　トレンディエンジェル　斎藤さん
// ８　フットボールアワー　岩尾
// ９　アンタッチャブル　ザキヤマ
// １０　銀シャリ　鰻
// １１　マヂカルラブリー　野田クリスタル
// １２　ブラックマヨネーズ　小杉
// １３　チュートリアル　徳井
// １４　霜降り明星　せいや
// １５　錦鯉　長谷川