# VK Add Link Parameter

WordPress サイト内のすべてのリンク (`<a>`) やフォーム (`<form>`) に、指定した URL パラメータ（例: `vwaf`）を自動的に追加するプラグインです。  
アフィリエイトパラメータやキャンペーントラッキング、または独自のパラメータを引き回す用途に便利です。

## 主な特徴

- クエリパラメータ（例: `vwaf`）が URL に存在する場合、その値をすべてのリンクとフォームに自動付与します。
- フォーム送信時は、hidden input としてパラメータが自動挿入されます。
- JavaScript と PHP で構成されており、設置・運用がシンプルです。

## インストール方法

1. `vk-add-link-parameter.zip` を WordPress のプラグインディレクトリにアップロードして展開します。
2. WordPress の「プラグイン」画面から有効化します。
3. プラグインが自動で動作を開始します。

## 動作仕様

- パラメータ名は現状「vwaf」で固定されています（必要に応じてソースコードを編集してください）。
- 標準的な `<a>` および `<form>` タグであればカスタム投稿やカスタムフォームでも動作します。
- サイト全体の公開ページで自動的に動作します。

## 開発者向け
PHP の関数名やクラス名、変数名の接頭辞は　```valp``` または ```VALP``` です。（仮）<br>
( .phpcs.xml の WordPress.NamingConventions.PrefixAllGlobals を参照 )<br>
<br>
（例）<br>
```
function valp_display_aaaa() {
  echo 'aaaa';
}

$valp_number = 1;
```

テキストドメインは ```vk-add-link-parameter``` です。（仮）<br>
( .phpcs.xml の WordPress.WP.I18n を参照 )<br>
<br>
PHP Unit Test はの中身は空のようですが、一応 [vektor-inc/vk-wp-unit-test-tools](https://github.com/vektor-inc/vk-wp-unit-test-tools) が走るようになっています。 <br>
<br>
リリース時は４桁のタグを打てばリリースされます。  <br>
( .github/workflows/deploy.yml の on:push:tags を参照 ) <br>
<br>
（例）<br>
```
git tag 1.11.11.0
git push origin 1.11.11.0
```

### コマンドについて

初回のみ下記操作が必要です

```
npm install
composer install
```

- `npm run build` でビルドされます。
- `npm run dist` で `dist/vk-add-link-parameter` にリリース用のディレクトリが生成されます。
- `npm run zip` で　`dist/vk-add-link-parameter` の内容を zip で圧縮します。
- `npm run make:zip` は `npm run dist` と `npm run zip` を順番に実行します。
- `npm run lint:php` で PHP の lint ( phpcs ) が走ります。
- `npm run format.php` で PHP のフォーマット ( phpcbf ) が走ります。 
- `npm run lint:js` で JS 等の lint やフォーマットが走ります。
- `npm run phpunit` で PHP Unit が走ります。 ( 現状ベクトルの Fatal Error テストのみ )

## 免責事項・ライセンス

GPLv2 もしくはそれ以降のバージョンで配布しています。

---

**開発元:** [Vektor,Inc.](https://vektor-inc.co.jp/)

