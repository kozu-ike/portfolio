<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポートフォリオ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <div class="container">
        <!-- ナビゲーションバー -->
        <header>
            <h1>ポートフォリオ</h1>
            <nav>
                <ul>
                    <li><a href="/">自己紹介</a></li>
                    <li><a href="/project">プロジェクト</a></li>
                    <li><a href="/contact">お問い合わせ</a></li>
                </ul>
            </nav>
        </header>

        <section id="projects">
            <h2>プロジェクト</h2>

            <div class="project">
                <h3>mogitate</h3>
                <img src="images/mogitate-project.png" alt="mogitate プロジェクト画像">
                <p>スクールのカリキュラムで取り組んだ課題としてECサイトをテーマに開発しました。基本的なCRUD処理に加え、出品・購入・レビューといった実際の利用を意識した機能を実装。LaravelのMVC構造やルーティング設計の理解を深めることができました。</p>
                <p><strong>評価：S判定</strong>（課題提出後、優れた完成度としてスクール側からS判定を受けました）</p>
                <p><strong>開発期間：</strong>1週間での開発を達成し、限られた時間内で機能面・デザイン面ともに高いクオリティを実現しました。</p>
                <p><strong>使用技術：</strong>PHP / Laravel / MySQL / Tailwind CSS</p>
                <a href="https://github.com/kozu-ike/freshly-picked" target="_blank" aria-label="GitHub リポジトリ">GitHub リポジトリ</a>
            </div>

            <div class="project">
                <h3>フリマアプリ</h3>
                <img src="images/freemarket-app.png" alt="フリマアプリ プロジェクト画像">
                <p>2ヶ月の製作期間が与えられたプロジェクトですが、1ヶ月でフリマアプリを完成させました。商品登録、出品、購入、レビューといった機能を実装し、ユーザーが直感的に使いやすいUI/UXを意識しました。データベース設計やRESTful APIの実装を通じて、バックエンドの開発力を大きく向上させることができました。</p>
                <p><strong>評価：S判定</strong>（課題提出後、優れた完成度としてスクール側からS判定を受けました）</p>
                <p><strong>開発期間：</strong>2ヶ月のプロジェクトですが、1ヶ月で完成させ、スケジュール通りに高いクオリティを維持できました。</p>
                <p><strong>使用技術：</strong>PHP / Laravel / MySQL / Tailwind CSS</p>
                <p>ユーザー登録、商品管理、購入履歴の管理など、実際のフリマアプリに必要な機能を網羅しました。フロントエンドとバックエンドの両方に取り組み、UI/UXデザインとバックエンドのロジックをしっかりと組み合わせました。</p>
                <p><strong>外部サービス：</strong>Stripe（クレジットカード決済機能） / Mailtrap（開発・テスト用のメール送信確認）</p>
                <a href="https://github.com/kozu-ike/flea-market-app" target="_blank" aria-label="GitHub リポジトリ">GitHub リポジトリ</a>
            </div>

        </section>


        <footer>
            <p>© 2025 松尾小朱衣</p>
        </footer>
</body>

</html>
