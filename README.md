# B級/ブックマークアプリ（追加機能）

## 1.概要
WEBサイトのURLとタイトルを保存するアプリケーション。

<br><br>

## 2.レビューポイント
### 機能要件
- レベル1：タイトル検索機能
  - ブックマークしたページを検索して一覧で表示する。
  - 部分一致で「タイトル」を検索をする。

- レベル2：ブックマーク削除機能
  - ブックマークしたページをテーブルから物理削除する。
  - 画面遷移なしで「削除処理」と「HTMLの削除」を実施する。

- レベル3：URL登録機能（トップページ）
  - （別ページではなく）トップページに入力欄と登録ボタンを配置する。
  - 画面遷移なしで「保存処理」を実施する。

### 技術要件
- レベル4：保存/削除を実現する方法について
  - 非同期で各処理を実施する。
 
<br>
※機能の実現方式は開発者の判断に委ねる。<br>
※レベル3において最新のブックマーク一覧を非同期で取得しないことを許容する。<br>
※サンプルファイル(exampleディレクトリ)を使って開発することを許容する。


### 成果物の前提条件
- CSSフレームワークを使うこと。
  - UIKitをおすすめする。

<br><br>

## 3.ブックマーク削除機能
<img width="700" alt="image" src="https://github.com/ppf-academy/class-b-03-02/blob/main/bookmark_app_element_delete.png">
