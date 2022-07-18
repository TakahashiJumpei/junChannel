@extends('layout.app')

@section('title', 'じゅんちゃんねる')
@include('layout.header')
@include('layout.footer')


@section('content')

    <div class="col-md-12">
        <div class="h3 mt-5 mb-5">

            {{-- プライバシーポリシー --}}
            <div>
                <h1 class="title">プライバシーポリシー</h1>
                <div class="base-box tos-container">
                    <div class="tos-explanation-container">
                        <p class="tos-explanation">
                            じゅんちゃんねる
                            管理人(以下、「管理人」とします)がこのウェブサイト上で提供するじゅんちゃんねる(以下、「本サービス」)における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。
                        </p>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第１条（個人情報）</h2>
                        <ul class="tos-item-explanation">
                            <p>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。
                            </p>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第２条（個人情報の収集方法）</h2>
                        <ul class="tos-item-explanation">
                            <p>管理人は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,管理人の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。
                            </p>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第３条（個人情報を収集・利用する目的）</h2>
                        <ul class="tos-item-explanation">
                            <li class="flex">
                                <p class="index">1.</p>
                                <p class="explanation">本サービスの提供・運営のため</p>
                            </li>
                            <li class="flex">
                                <p class="index">2.</p>
                                <p class="explanation">ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</p>
                            </li>
                            <li class="flex">
                                <p class="index">3.</p>
                                <p class="explanation">ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び管理人が提供する他のサービスの案内のメールを送付するため</p>
                            </li>
                            <li class="flex">
                                <p class="index">4.</p>
                                <p class="explanation">メンテナンス，重要なお知らせなど必要に応じたご連絡のため</p>
                            </li>
                            <li class="flex">
                                <p class="index">5.</p>
                                <p class="explanation">利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため</p>
                            </li>
                            <li class="flex">
                                <p class="index">6.</p>
                                <p class="explanation">ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため</p>
                            </li>
                            <li class="flex">
                                <p class="index">7.</p>
                                <p class="explanation">有料サービスにおいて，ユーザーに利用料金を請求するため</p>
                            </li>
                            <li class="flex">
                                <p class="index">8.</p>
                                <p class="explanation">上記の利用目的に付随する目的</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第４条（利用目的の変更）</h2>
                        <ul class="tos-item-explanation">
                            <li class="flex">
                                <p class="index">1.</p>
                                <p class="explanation">管理人は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。</p>
                            </li>
                            <li class="flex">
                                <p class="index">2.</p>
                                <p class="explanation">
                                    利用目的の変更を行った場合には，変更後の目的について，管理人所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第５条（個人情報の第三者提供）</h2>
                        <ul class="tos-item-explanation">
                            <li class="flex">
                                <p class="index">1.</p>
                                <p class="explanation">
                                    管理人は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。
                                </p>
                            </li>
                            <ul class="tos-item-sub-explanation">
                                <li class="flex">
                                    <p class="index">1.</p>
                                    <p class="explanation">人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき</p>
                                </li>
                                <li class="flex">
                                    <p class="index">2.</p>
                                    <p class="explanation">公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき</p>
                                </li>
                                <li class="flex">
                                    <p class="index">3.</p>
                                    <p class="explanation">
                                        国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき
                                    </p>
                                </li>
                                <li class="flex">
                                    <p class="index">4.</p>
                                    <p class="explanation">予め次の事項を告知あるいは公表し，かつ管理人が個人情報保護委員会に届出をしたとき </p>
                                </li>
                                <ul class="tos-item-sub-explanation">
                                    <li class="flex">
                                        <p class="index">1.</p>
                                        <p class="explanation">利用目的に第三者への提供を含むこと </p>
                                    </li>
                                    <li class="flex">
                                        <p class="index">2.</p>
                                        <p class="explanation">第三者に提供されるデータの項目 </p>
                                    </li>
                                    <li class="flex">
                                        <p class="index">3.</p>
                                        <p class="explanation">第三者への提供の手段または方法 </p>
                                    </li>
                                    <li class="flex">
                                        <p class="index">4.</p>
                                        <p class="explanation">本人の求めに応じて個人情報の第三者への提供を停止すること </p>
                                    </li>
                                    <li class="flex">
                                        <p class="index">5.</p>
                                        <p class="explanation">本人の求めを受け付ける方法 </p>
                                    </li>
                                </ul>
                            </ul>
                            <li class="flex">
                                <p class="index">2.</p>
                                <p class="explanation">前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。 </p>
                            </li>
                            <ul class="tos-item-sub-explanation">
                                <li class="flex">
                                    <p class="index">1.</p>
                                    <p class="explanation">管理人が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合 </p>
                                </li>
                                <li class="flex">
                                    <p class="index">2.</p>
                                    <p class="explanation">合併その他の事由による事業の承継に伴って個人情報が提供される場合 </p>
                                </li>
                                <li class="flex">
                                    <p class="index">3.</p>
                                    <p class="explanation">
                                        個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いた場合
                                    </p>
                                </li>
                            </ul>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第６条（個人情報の開示）</h2>
                        <ul class="tos-item-explanation">
                            <li class="flex">
                                <p class="index">1.</p>
                                <p class="explanation">
                                    管理人は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。
                                </p>
                            </li>
                            <ul class="tos-item-sub-explanation">
                                <li class="flex">
                                    <p class="index">1.</p>
                                    <p class="explanation">本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合</p>
                                </li>
                                <li class="flex">
                                    <p class="index">2.</p>
                                    <p class="explanation">管理人の業務の適正な実施に著しい支障を及ぼすおそれがある場合</p>
                                </li>
                                <li class="flex">
                                    <p class="index">3.</p>
                                    <p class="explanation">その他法令に違反することとなる場合</p>
                                </li>
                            </ul>
                            <li class="flex">
                                <p class="index">2.</p>
                                <p class="explanation">前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第７条（個人情報の訂正および削除）</h2>
                        <ul class="tos-item-explanation">
                            <li class="flex">
                                <p class="index">1.</p>
                                <p class="explanation">
                                    ユーザーは，管理人の保有する自己の個人情報が誤った情報である場合には，管理人が定める手続きにより，管理人に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。
                                </p>
                            </li>
                            <li class="flex">
                                <p class="index">2.</p>
                                <p class="explanation">管理人は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。
                                </p>
                            </li>
                            <li class="flex">
                                <p class="index">3.</p>
                                <p class="explanation">管理人は，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第８条（個人情報の利用停止等）</h2>
                        <ul class="tos-item-explanation">
                            <li class="flex">
                                <p class="index">1.</p>
                                <p class="explanation">
                                    管理人は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。
                                </p>
                            </li>
                            <li class="flex">
                                <p class="index">2.</p>
                                <p class="explanation">前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。</p>
                            </li>
                            <li class="flex">
                                <p class="index">3.</p>
                                <p class="explanation">
                                    管理人は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。</p>
                            </li>
                            <li class="flex">
                                <p class="index">4.</p>
                                <p class="explanation">
                                    前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第９条（プライバシーポリシーの変更）</h2>
                        <ul class="tos-item-explanation">
                            <li class="flex">
                                <p class="index">1.</p>
                                <p class="explanation">本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。
                                </p>
                            </li>
                            <li class="flex">
                                <p class="index">2.</p>
                                <p class="explanation">管理人が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <h2 class="tos-item-title">第１０条（お問い合わせ窓口）</h2>
                        <ul class="tos-item-explanation">
                            <p>本ポリシーに関するお問い合わせは，下記の窓口までお願いいたします。</p>
                            <li class="flex">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc-XPGvWdCzaNzelP5cyb_pwIAnGkMPo-ECCSBvR0TIc8qLfA/viewform?usp=sf_link"
                                    target="blank">
                                    <p style="color:#cf5271; font-weight:bold;">お問い合わせ</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tos-item-container">
                        <ul class="tos-item-explanation">
                            <p>以上</p>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        li {
            list-style: none;
        }

        .title {
            margin-bottom: 10px;
            font-size: 150%;
        }

        .base-box {
            background-color: #fff;
            min-height: 80vh;
            padding: 20px 10px;
        }

        .flex {
            display: flex;
        }

        .tos-explanation-container {
            display: flex;
            font-size: 70%;
            text-align: left;
            border-bottom: 1px dotted #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .tos-container {
            display: flex;
            flex-direction: column;
            color: #2c3e50;
        }

        .tos-item-container {
            display: flex;
            flex-direction: column;
            text-align: left;
            margin-bottom: 10px;
        }

        .tos-item-explanation {
            font-size: 70%;
            display: flex;
            flex-direction: column;
            padding: 0 15px;
            margin-top: 10px;
        }

        .tos-item-sub-explanation {
            padding: 0 15px;
            margin: 10px 0;
        }

        .tos-item-title {
            font-size: 100%;
        }

        .index {
            display: inline-block;
        }
    </style>

@endsection
