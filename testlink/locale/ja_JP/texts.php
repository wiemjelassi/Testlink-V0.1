<?php
/**
 * ♔ TestLink Open Source Project - http://testlink.sourceforge.net/
 * This script is distributed under the GNU General Public License 2 or later.
 *
 * Filename $RCSfile: texts.php,v $
 * @version $Revision: 1.5 $
 * @modified $Date: 2010/06/24 17:25:53 $ by $Author: asimon83 $
 * @author Martin Havlat and reviewers from TestLink Community
 *
 * --------------------------------------------------------------------------------------
 *
 * Scope:
 * English (en_GB) texts for help/instruction pages. Strings for dynamic pages
 * are stored in strings.txt pages.
 *
 * Here we are defining GLOBAL variables. To avoid override of other globals
 * we are using reserved prefixes:
 * $TLS_help[<key>] and $TLS_help_title[<key>]
 * or
 * $TLS_instruct[<key>] and $TLS_instruct_title[<key>]
 *
 *
 * Revisions history is not stored for the file
 *
 *-------------------------------------------------------------------
 * Japanese translation
 *-------------------------------------------------------------------
 * Testing Engineer's Forum (TEF) in Japan
 * Working Group of TestLink Japanese Translation Project
 *
 * http://blues.se.uec.ac.jp/swtest/
 * http://testlinkjp.org/
 * http://sourceforge.jp/projects/testlinkjp/
 *
 * Adviser:
 * Yasuharu NISHI
 *
 * Core member:
 * Atsushi Nagata,       AZMA Daisuke,         Hiromi Nishiyama,
 * Kaname Mochizuki,     Kaoru Nakamura,       Kunio Murakami,
 * Lumina Nishihara,     Marino Suda,          Masahide Katsumata,
 * Masami Ichikawa,      Masataka Yoneta,      Sadahiko Hantani,
 * Shinichi Sugiyama,    Shinsuke Matsuki,     Shizuka Ban,
 * Takahiro Wada,        Toshinori Sawaguchi,  Toshiyuki Kawanishi,
 * Yasuhiko Okada,       Yoichi Kunihiro,      Yoshihiro Yoshimura,
 * Yukiko Kajino
 *
 **/


// --------------------------------------------------------------------------------------
$TLS_htmltext_title['error']  = "Application error";
$TLS_htmltext['error']    = "<p>Unexpected error happens. Please check event viewer or " .
    "logs for details.</p><p>You are welcome to report the problem. Please visit our " .
    "<a href='http://www.teamst.org'>website</a>.</p>";



$TLS_htmltext_title['assignReqs'] = "テストケースに要件を割り当てる";
$TLS_htmltext['assignReqs']     = "<h2>目的:</h2>
<p>この機能により、要件とテストケースを関連付けることができます。
テスト設計者は0..n対0..nの関連付けを定義することができます。
すなわち、要件に関連付けられないテストケースがあったり、複数の
要件にテストケースを関連付けることができますし、逆も可能です。
このトレーサビリティマトリクスにより、
要件網羅率の調査や要件ごとのテストの結果の追跡することができます。
この解析結果は、次の計画に役立つでしょう。</p>

<h2>やってみましょう！:</h2>
<ol>
  <li>左ブロックのツリー構造からテストケースを選択してください。
    要件仕様書リストのコンボボックスがワークエリアの上部に表示されます。 </li>
  <li>要件仕様を選択してください。
    TestLink は自動でページの再読み込みを行います。</li>
  <li>ワークエリアの中央のブロックに選択した仕様書より、
    テストケースと関係付けられたすべての要件がリストされます。
    下のブロックには現在のテストケースと関連付けられていないすべての要件の中から
    「使用可能な要件」がリストされます。
    このテストケースを選択し、「割り当て」ボタンをクリックすることにより、
    テスト設計者は要件に印をつけることができます。
    新規に割り当てられたテストケースは中央のブロックの「割り当てられた要件」に表示されます。</li>
</ol>
<h2>Warning:</h2>
凍結された要件は変更して、網羅率を更新することはできません。そのため、凍結された要件は一覧に表示されますが、関連付けのチェックボックスは無効になります。";


// --------------------------------------------------------------------------------------
$TLS_htmltext_title['editTc'] = "テスト仕様";
$TLS_htmltext['editTc']     = "<h2>目的:</h2>
<p><i>テスト仕様</i> は、存在する<i>テストスイート</i>そして<i>テストケース</i> の".
        "情報を閲覧したり変更したりする場所です。" .
        "異なるバージョンのテストケースを見ることもできます。</p>

<h2>やってみましょう！:</h2>
<ol>
  <li>テストプロジェクトをナビゲーションのツリーから選択します。<i>メモ: " .
  "テストプロジェクトの変更は右上の" .
    "プルダウンリストを選択することでおこなうことができます。</i></li>
  <li><b>子テストスイート作成</b>ボタンをクリックし、テストスイートを作成します。" .
  "このテストスイートに従ってテストドキュメントが構成されます" .
  "(例えば、機能/非機能などの種別、コンポーネントやフィーチャーによる分別など)。" .
  "テストスイートには、テストケース、環境設定、関連ドキュメントへの参照、" .
  "制限事項や、それ以外に必要な情報を記載します。" .
  "一般に、配下のテストケースに関する様々な共通する説明を記述することになります。" .
  "<li>テストスイートは「フォルダー」のような概念ともいえます。 従って、テストプロジェクト内で" .
  "テストスイートのコピーや移動ができます。また、インポートとエクスポートも可能です (テストケースを含めることもできます)。</li>
  <li>作成したテストスイートをナビゲーションから選択し、" .
  "<b>テストケースを作成</b>ボタンをクリックすることでテストケースを作成します。" .
  "テストケースには、テストシナリオ、期待結果やテストプロジェクトで定義されたカスタムフィールド" .
  "などを記載します (詳しくは、ユーザマニュアルを参照してください。" .
  "また、トレーサビリティのために<b>キーワード</b>を割り当てることもできます。</li>
  <li>左横にあるツリーでデータ編集を指示します。</li>
  <li>作成したテスト仕様書をテストケースが準備完了したときに <i>テスト計画</i>に割り当てます。</li>
</ol>

<p>TestLinkではテストスイートによってテストケースを整理することができるでしょう。" .
"テストスイートは入れ子状にすることができるので、テストスイートの階層を作ることができます。
この情報はテストケースとともに印刷されます。</p>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['searchTc'] = "テストケース検索ページ";
$TLS_htmltext['searchTc']     = "<h2>目的：</h2>

<p>キーワードに応じた検索文字列を入力してください。大文字小文字は区別しません。
検索結果は、現在のテストプロジェクトのテストケースのみを含みます。</p>


<h2>検索してみましょう！：</h2>

<ol>
  <li>適当な欄に検索したい文字列を入力してください。フォームの中の使わない欄は空欄のままにしておいてください。</li>
  <li>必要なキーワードを選ぶか、空欄('適用しない'の意)を選んで下さい。</li>
  <li>検索ボタンをクリックして下さい。</li>
  <li>全ての条件に一致したテストケースが表示されます。'タイトル'をクリックすることでテストケースを編集できます。</li>
</ol>";

/* contribution by asimon for 2976 */
// requirements search
// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['searchReq']  = "要件検索";
$TLS_htmltext['searchReq']    = "<h2>目的:</h2>

<p>キーワードに応じた検索文字列を入力してください。大文字小文字は区別しません。
検索結果は、現在のテストプロジェクトの要件のみを含みます。</p>

<h2>検索してみましょう！：</h2>

<ol>
  <li>適当な欄に検索したい文字列を入力してください。フォームの中の使わない欄は空欄のままにしておいてください。</li>
  <li>必要なキーワードを選ぶか、空欄('適用しない'の意)を選んで下さい。</li>
  <li>検索ボタンをクリックして下さい。</li>
  <li>全ての条件に一致した要件が表示されます。'タイトル'をクリックすることで要件を編集できます。</li>
</ol>

<h2>注:</h2>

<p>- 現在のプロジェクト内の要件のみが検索されます。<br>
- 検索は大文字小文字を区別しません。<br>
- 空のフィールドは考慮されません。</p>";

// requirement specification search
// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['searchReqSpec']  = "要件仕様検索";
$TLS_htmltext['searchReqSpec']    = "<h2>目的:</h2>

<p>キーワードに応じた検索文字列を入力してください。大文字小文字は区別しません。
検索結果は、現在のテストプロジェクトの要件仕様のみを含みます。</p>

<h2>検索してみましょう！：</h2>

<ol>
  <li>適当な欄に検索したい文字列を入力してください。フォームの中の使わない欄は空欄のままにしておいてください。</li>
  <li>必要なキーワードを選ぶか、空欄('適用しない'の意)を選んで下さい。</li>
  <li>検索ボタンをクリックして下さい。</li>
  <li>全ての条件に一致した要件仕様が表示されます。'タイトル'をクリックすることで要件仕様を編集できます。</li>
</ol>

<h2>注:</h2>

<p>- 現在のプロジェクト内の要件のみが検索されます。<br>
- 検索は大文字小文字を区別しません。<br>
- 空のフィールドは考慮されません。</p>";
/* end contribution */


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['printTestSpec']  = "テスト仕様の印刷"; //printTC.html
$TLS_htmltext['printTestSpec']      = "<h2>目的:</h2>
<p>この機能は各々のテストケース、またはテストプロジェクト/テスト計画全体のテストケースを印刷できます。</p>
<h2>やってみましょう！:</h2>
<ol>
<li>
<p>参照するテストケース、テストスイート、またはテストプロジェクトをクリックします。<br />
</p>
</li>
<li><p>ナビゲーションシートの「印刷オプション」テーブルにて印刷データの範囲とフォーマットを
設定します。HTML、OpenOffice Writer、もしくはMS Word形式を選択することができます。詳しくは<span class=\"help\"
onclick=\"javascript:open_help_windows('printFilter','{$locale}');\">ヘルプ</span>を参照してください。</p>
</li>
<li><p>ブラウザの印刷機能にてテストケースを印刷します。<br />
 <i>注: 印刷できるのはブラウザの右側のみです。</i></p></li>
</ol>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['reqSpecMgmt']  = "要件仕様の設計";
$TLS_htmltext['reqSpecMgmt']      = "<p>要件仕様ドキュメントを管理することができます。</p>

<h2>要件仕様</h2>

<p>各要件は、テストプロジェクトごとに作成する<b>要件仕様ドキュメント</b>によって
まとめられています。<br />ただし、TestLink 自体には、要件仕様、および要件の
バージョン管理機能はサポートされていません。もし、バージョンを考慮する必要がある場合は、
バージョン番号を含めた題号を<b>タイトル</b>欄に記載してください。
また、仕様の簡単な説明や備考を <b>スコープ</b> 欄に記載することができます。</p>

<p><b><a name='total_count'>ドキュメント内の全要件数</a></b> は、
TestLinkに全要件を登録しなかった場合に、要件網羅率を計算するために使用します。
値<b>0</b>を設定した場合は、TestLinkに登録されている要件数を指標計算で使用します。</p>
<p><i>例えば、SRSが 200 の要件を含んでいるが、50のみをTestLinkに登録したとします。
するとテストの要件網羅率は25%となります (追加した要件を全てテストした場合)。</i></p>

<h2><a name='req'>要件</a></h2>

<p>要件を作成する要件仕様のタイトルをクリックしてください。要件仕様が内場合は、テストプロジェクト名をクリックすることで作成することができます。
要件をドキュメントに作成、編集、削除、または要件をインポートすることができます。
ステータスは「通常」または「テスト不能」から選択する必要があります。
テスト不能要件は指標計算で使用されません。
このパラメータは実装されていない機能、間違った設計の要件のために使用されます。</p>

<p>要件仕様のページから、数回ボタンをクリックすることで、
要件をチェックするための新規テストケースを作成することができます。
これらのテストケースは、TestLinkの設定で定義された名前のテストスイートに格納されます
<i>(デフォルトでは \$tlCfg->req_cfg->default_testsuite_name =
'Test suite created by Requirement - Auto';)</i>。
タイトルとスコープは作成されたテストケースにコピーされます。</p>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['printReqSpec'] = "要件仕様の印刷"; //printReq
$TLS_htmltext['printReqSpec'] = "<h2>目的:</h2>
<p>ここから、単一の要件、要件仕様内のすべての要件、
またはテストプロジェクトのすべての要件を印刷できます。</p>
<h2>やってみましょう！:</h2>
<ol>
<li>
<p>表示する要件の部分を選択し、要件、要件仕様、またはテストプロジェクトをクリックします。
印刷可能なページが表示されます。</p>
</li>
<li><p>ナビゲーションペインの「表示... 」ドロップダウンボックスを使用して、
HTML、OpenOffice Writer、またはMicosoft Word文書のどれで情報を表示するかを指定します。
詳細は <span class=\"help\" onclick=\"javascript:open_help_window('printFilter',
'{$locale}');\">ヘルプ</span> をご覧ください。</p>
</li>
<li><p>実際に情報を印刷するのは、ブラウザの印刷機能を使用します。<br />
<i>注: 右側のフレームのみを印刷してください。</i></p>
</li>
</ol>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['keywordsAssign'] = "キーワードの割り当て";
$TLS_htmltext['keywordsAssign']       = "<h2>目的:</h2>
<p>キーワードの割り当てでは、ユーザが一括してテストスイートまたはテストケースに
一括してキーワードを割り当てることができます。</p>

<h2>キーワードを割り当てましょう！:</h2>
<ol>
  <li>左側のツリービューのテストスイート、
        テストケースを選択しましょう。</li>
  <li>右側のボックスはキーワードを割り当てた
        各テストケースを参照できます。</li>
  <li>これらの選択は後でもっと大まかなレベルに
        ケースを割り当てることもできます。 </li>
</ol>

<h2>テスト計画の重要な情報に関してのキーワードの割り当て:</h2>
<p>キーワードの割り当ての詳細はテスト計画のテストケース、
テスト計画に最新バージョンのテストケースが含まれていればそれが有効になり作成されます。
もし、そうでなく古いバージョンのテストケースがテスト計画に含まれている場合には、
割り当てられたキーワードは、現時点では表示されません。
</p>
<p>
TestLinkはテスト計画の古いバージョンのテストケースは、最新バージョンのテストケースに対しておこなったキーワードの割り当てによって影響を受けません。
もしテスト計画が更新されたテストケースを必要とするならば、はじめに「修正されたテストケースの更新」
機能をキーワードの割り当てを行う前に使用し、対象のテストケースが最新であることを確かめてください。
</p>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['executeTest']  = "テストケース実行";
$TLS_htmltext['executeTest']    = "<h2>目的:</h2>

<p>各テスト担当者がテストケース実行をおこなうことができます。
ユーザはテスト結果をビルドごとのテストケースに登録することができます。" .
         "フィルタ、設定(セッティング)についてのいろいろな情報についてはヘルプを参照してください。（「?」のアイコンをクリックしてください。）</p>

<h2>やってみましょう！</h2>

<ol>
    <li>テスト計画を実行するビルドを決定しなければなりません。</li>
    <li>プルダウンからビルドと、ナビゲーションシートの「更新」ボタンを選択してください。</li>
    <li>ツリーにあるテストケース名をクリックします。</li>
  <li>テスト結果および、備考、バグなどを登録します。</li>
  <li>結果を保存します。</li>
</ol>
<p><i>注: GUI上から障害レポートを作成するためには、
バグ管理システムと連携するようにTestLinkを設定する必要があります。</i></p>";

// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['showMetrics']  = "テストレポートと指標の概要";
$TLS_htmltext['showMetrics']    = "<p>レポートはテスト計画に関連しています。 " .
    "(上段のナビゲータにより選択します)。現在実行中のテスト計画以外のテスト計画を選択して
レポートを表示することもできます。以下のレポートフォーマットを選択することができます:</p>
<ul>
<li><b>HTML</b> - Webページにレポートを表示</li>
<li><b>MS Word ライク</b> - Microsoft Wordにレポートをインポート</li>
<li><b>メール (HTML)</b> - ユーザのメールアドレスにメールでレポートを送信</li>
</ul>

<p>「印刷」ボタンは1種類のレポートのみを印刷します。</p>
<p>数種類のレポートを選択することができます。いかに各レポートの機能を説明します。</p>

<h3>テスト計画</h3>
<p>ドキュメント「テスト計画」には、内容とドキュメントの構成を定義するオプションがあります。</p>

<h3>テストレポート</h3>
<p>ドキュメント「テストレポート」には、内容とドキュメントの構成を定義するオプションがあります。
テストケースと共にテスト結果も含みます。</p>

<h3>一般的なテスト計画指標</h3>
<p>このページでは、テストスイート、オーナー、キーワードごとのテスト計画の最新の
ステータスを表示します。「最新のテスト結果」とは、最後に実行したビルドに関するテストケースの結果を示しています。
例えば、複数のビルドにわたってあるテストケースを実行した場合は、最新の結果のみが反映されます。</p>

<p>「最新のテスト結果」は多くのレポートで使用される概念で、以下のように決められます: </p>
<ul>
<li>テスト計画に追加された順番によって、ビルドの新旧が決まります。
ビルドの最新のビルドの結果は古いビルドの結果よりも優先されます。
例えば、ビルド1で「失敗」したテストケースでも、ビルド2で「成功」していれば、最新の結果は「成功」となります。</li>
<li>あるテストケースが同じビルド内で複数回実行された場合は、
最新の実行結果が優先されます。例えば、ビルド3のリリース後、テスター1よって午後2時に「成功」したテストケースでも、
テスター2によって午後3時に「失敗」と記録されれれば、最新の結果は「失敗」となります。</li>
<li>未実行のビルドがある場合は、そのテストケースの結果にはそのビルドは影響しません。
例えば、ビルド1で「成功」したテストケースが、テスト2で「未実行」だった場合は、
最新の結果は「成功」となります。</li>
</ul>
<p>以下の表が表示されます:</p>
<ul>
    <li><b>最上位のテストスイートごとの結果</b>
    各最上位スイートの結果が一覧表示されます。成功、失敗、ブロック、未実行のテストケースの合計、そして完了率を表示します。
    「完了した」テストケースとは、成功、失敗、ブロックの結果となったテストケースのことです。
    トップレベルスイートの結果には全ての子スイートの結果を含みます。</li>
    <li><b>キーワードごとの結果</b>
    現在のテスト計画のテストケースに割り当てられているキーワードを全て表示します。
    またそのキーワードに関連するテストケースを表示します。</li>
    <li><b>オーナーごとの結果</b>
    現在のテスト計画の中で、各オーナーに割り当てたれたテストの結果を一覧表示します。
    未割り当てのテストケースは、「未割り当て」という見出しのもとに集計されます。</li>
</ul>

<h3>総合的なビルドのステータス</h3>
<p>全ビルドの実行結果を一覧表示します。各ビルドのテストケースの合計数、成功数、成功率、失敗数、失敗率、ブロック数、ブロック率、未実行数、未実行率を表示します。
もし、同一ビルドでテストケースが複数回実行されている場合は、最新のテスト結果が考慮されます。</p>


<h3>ブロック、失敗、未実行のテストケースのレポート</h3>
<p>これらのレポートは、ブロック、失敗、未実行の全テストケースを表示します。「最新のテスト結果」のルール（一般的なテスト計画指標の項で説明しました）によって、テストケースがブロック、失敗、未実行に該当するかどうかを判定します。TestLinkとバグトラッキングシステムを統合して使用している場合は、ブロックと失敗のレポートに関連するバグが表示されます。</p>

<h3>テストレポート</h3>
<p>全ビルドの全テストケースのステータスを表示します。同一ビルド内でテストケースが複数回実行された場合は、最新の結果が表示されます。このレポートでは、「?」 マークを未実行のテストケースを表わすために使用します。大量のデータを使用している場合は、ブラウジングが簡単なExcel形式で出力することをお勧めします。</p>

<h3>グラフ</h3>
<p>4種類のチャートに表示される結果は、「最新のテスト結果」のルールに従って計算されます。グラフのアニメーションは、ユーザが現在のテスト計画指標を把握するための手助けとなるでしょう。
以下の4種類のチャートが表示されます:</p>
<ul>
<li>成功 / 失敗 / ブロック / 未実行のテストケースを表わす円グラフ</li>
<li>キーワードごとの結果を表わす棒グラフ</li>
<li>オーナーごとの結果を表わす棒グラフ</li>
<li>トップレベルスイートごとの結果を表わす棒グラフ</li>
</ul>
<p>棒グラフは、成功、失敗、ブロック、未実行のテストケース数を近似的に示しています。</p>

<h3>各テストケースのバグの合計</h3>
<p>このレポートは、テストプロジェクト内のバグが発見されたテストケースを表示します。このレポートはバグトラキングシステムが接続されている場合のみ表示されます。</p>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['planAddTC']  = "テスト計画へテストケースを追加/削除"; // testSetAdd
$TLS_htmltext['planAddTC']      = "<h2>目的:</h2>
<p>リーダー権限を持つユーザは、テストケースをテスト計画へ追加できます。</p>

<h2>テストケースの追加/削除:</h2>
<ol>
  <li>テストスイートをクリックし、全て、または1つのテストケースを表示します。</li>
  <li>あなたが追加を完了したい時、「テストケース追加/削除」ボタンをクリックし、テストケースをインポートして下さい。
        注：同じテストケースを複数回追加することは出来ません。</li>
</ol>";

// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['tc_exec_assignment'] = "テストケース実行担当者の割り当て";
$TLS_htmltext['tc_exec_assignment']     = "<h2>目的:</h2>
<p>この機能により、各テストケースについて実行する責任を持つ担当者を設定することができます。</p>

<h2>やってみましょう！</h2>
<ol>
  <li>テストケースもしくはテストスイートを選択します。</li>
  <li>対象のテスト担当者を選択します。</li>
  <li>割り当てを確定するためにボタンをクリックします。</li>
  <li>実行ページで割り当ての完了を確認します。フィルターを割り当てた担当者にせっていしてみてください。</li>
</ol>";

// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['planUpdateTC'] = "テスト計画に割り当てたテストケースを更新する";
$TLS_htmltext['planUpdateTC']     = "<h2>目的</h2>
<p>このページでは、テスト仕様上で変更されたテストケースを最新バージョンに更新することができます。
テストの実行期間中に、テストケースのバージョンを明確にしたい場合は多くあるでしょう。" .
"例えば、あるテスト設計者がテスト仕様を変更したけれどもテスト計画には一通りのテスト完了後に反映させたい場合、" .
"もしくは、テスト実行はオリジナルバージョンで行ったけれども、結果は修正されたテストケースと共に参照したい場合などが考えられます。</p>

<h2>やってみましょう！</h2>
<ol>
  <li>テストケースもしくはテストスイートを選択します。</li>
  <li>対象のテストケースに対してプルダウンメニューから新たなバージョンを選択します。</li>
  <li>変更を確定するために「テスト計画を更新」ボタンをクリックします。</li>
  <li>実行ページのテストケースの文章を確認します。</li>
</ol>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['test_urgency'] = "テストに緊急度を設定する";
$TLS_htmltext['test_urgency']     = "<h2>目的</h2>
<p>TestLinkでは、テストケースの優先度に影響を与える「緊急度」をテストスイートに設定することができます。
    テストの優先度は各テストケースの作成時に設定する重要度とテスト計画で定義する重要度
    の両方から計算されます。テストリーダーは始めに実行すべきテストを指定すべきでしょう。
    これにより、時間に限りがある場合でも最重要なテストを網羅することができます。</p>

<h2>やってみましょう！</h2>
<ol>
  <li>ウィンドウ左のナビゲータから緊急性のあるプロダクト/コンポーネントに関する
  テストスイートを選択します。</li>
  <li>緊急度のレベルを選択します (高、中、低)。中がデフォルトです。
  例えば、あまり使用しない部分の優先度を下げたり、大きな変更が行われたコンポーネント
  の優先度を上げたりといったことが可能です。</li>
  <li>変更を確定するために「保存」ボタンをクリックしてください。</li>
</ol>
<p><i>一例として、テストケースに重要度「高」、テストスイートに緊急度「低」を設定すると " .
    "優先度は「中」になります。</i>";


// ------------------------------------------------------------------------------------------

?>