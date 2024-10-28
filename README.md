<img src="https://img.shields.io/badge/PHP-ccc.svg?logo=php&style=flat"> <img src="https://img.shields.io/badge/-CSS3-1572B6.svg?logo=css3&style=flat"> <img src="https://img.shields.io/badge/-HTML5-333.svg?logo=html5&style=flat">
<img src="https://img.shields.io/badge/Javascript-276DC3.svg?logo=javascript&style=flat">
<img src="https://img.shields.io/badge/-Windows-0078D6.svg?logo=windows&style=flat">
<img src="https://img.shields.io/badge/-MySQL-336791.svg?logo=mysql&style=flat">
<img src="https://img.shields.io/badge/-Visual%20Studio%20Code-007ACC.svg?logo=visual-studio-code&style=flat">
<img src="https://img.shields.io/badge/-GitHub-181717.svg?logo=github&style=flat">
<img src="https://img.shields.io/badge/-Docker-EEE.svg?logo=docker&style=flat">

![image](https://github.com/user-attachments/assets/2df70858-8988-4d0f-b75c-3af9252d3d0e)


## 1.概要
WEBサイトのURLとタイトルを保存するアプリケーション
<br><br>

## 2.機能要件
- レベル1：トップページ
  - ブックマークしたページを一覧で表示する。
  - ブックマークのタイトルを表示するときに一定以上の文字数を超えたら「...」に置き換える。

- レベル2：カテゴリ名称登録機能
  - カテゴリ名称をカテゴリテーブルに保存する。
  - 保存した情報は各画面や各処理で必要に応じて呼び出して利用する。

- レベル3：URL登録機能
  - ブックマークするURLをデータベースに保存する。
  - そのときにページのタイトル情報はWEBから取得する。

- レベル4：タイトル検索機能
  - ブックマークしたページを検索して一覧で表示する。
  - 部分一致で「タイトル」を検索をする。

- レベル5：ブックマーク削除機能
  - ブックマークしたページをテーブルから物理削除する。
  - 画面遷移なしで「削除処理」と「HTMLの削除」を実施する。

- レベル6：URL登録機能（トップページ）
  - （別ページではなく）トップページに入力欄と登録ボタンを配置する。
  - 画面遷移なしで「保存処理」を実施する。

## 3.制作期間
16日間

## 4.こだわったポイント
- 入力データにバリデーションチェックを2段構えにしたこと
  - 空欄は許容しない
  - URLの先頭がhttps以外は許容しない
- タイトルが長い場合は短縮の処理を追加したこと

## 5.仕様動作のイメージ
編集中



## 6.機能一覧
| トップ画面 |　ブックマーク追加 |
| ---- | ---- |
| ![image](https://github.com/user-attachments/assets/378283f4-0209-464e-8587-1b86ab4d79c1) | ああ |
| すべてのブックマークがTOPページに一覧で表示されるように実装しました。 | [ログイン画面]説明（例：●●実装しました。） |

| 事業者選択画面 |　請求書作成画面 |
| ---- | ---- |
| ![事業者選択画面] | ![請求書作成画面] |
| [事業者選択画面]説明 | [請求書作成画面]説明 |

| 請求書詳細画面 |　PDF出力画面 |
| ---- | ---- |
| ![請求書詳細画面] | ![PDF出力画面] |
| [請求書詳細画面]説明 | [PDF出力画面]説明 |

| 登録するマスタの選択画面 |　マスタの登録画面 |
| ---- | ---- |
| ![請求書詳細画面] | ![PDF出力画面] |
| [請求書詳細画面]説明 | [PDF出力画面]説明 |

## 7.使用技術
| Category          | Technology Stack    | 
| ----------------- | ------------------- | 
| Frontend          | HTML, CSS（UIkit）, JavaScript | 
| Backend           | PHP                 | 
| Database          | phpMyAdmin          | 
| Environment setup | Docker              | 
| etc.              | Git, GitHub, vscode | 

他選択肢：
Infrastructure：Amazon Web Services, Vercel
Monitoring：Sentry, UptimeRobot
CI/CD：GitHub Actions
Design：Figma, Lucid


## 8.今後の展望
