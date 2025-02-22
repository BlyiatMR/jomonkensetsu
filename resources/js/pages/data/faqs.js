const faqs = [
	// {
	// 	t:'ご依頼について<br>',
	// 	q:'依頼前にサンプルを見ることができますか？',
	// 	a:'以下のURLからWeb上でサンプルをご覧になれます。',
	// 	o:'<br><a href="https://japan-cg.com/">https://japan-cg.com/</a>'
	// },
	// {
	// 	t:'',
	// 	q:'依頼はどこからすればよいですか？',
	// 	a:'JHSオンラインシステムから「物件検索」をして、物件ごとにご依頼の商品を選択してください。',
	// 	o:''
	// },
	// {
	// 	t:'',
	// 	q:'JHSへ地盤調査依頼をした物件しか、依頼はできないのでしょうか？',
	// 	a:'原則JHSへ地盤調査依頼を頂いた物件のみとなります。',
	// 	o:''
	// },
	{
		t:'',
		q:'図面は何が必要ですか？',
		a:'①平面図、　②立面図、　③配置図、　④仕上げ表(外壁や玄関ドアなどの型番)',
		o:'⑤Google Mapで検索できる現地住所、　⑥その他任意資料（外構図、画像資料、3Dデータなど）'
	},
	// {
	// 	t:'',
	// 	q:'現地の写真は必要ですか？',
	// 	a:'必須ではありませんがポータルサイト等の掲載基準対応の場合、現状を確認できる写真があれば背景の精度を上げる事ができます。',
	// 	o:''
	// },

	// // others
	// {
	// 	t:'発注後の流れについて<br>',
	// 	q:'初めての依頼時はどうなりますか？',
	// 	a:'JHSオンラインシステムより依頼を頂いたのち、マルモリカンパニーの制作担当者より電話又はメールにて必要資料と制作の流れをご案内致します。',
	// 	o:''
	// },
	{
		t:'',
		q:'発注後はどういう流れになりますか？',
		a:'ビジネスチャットサービス「Chatwork」(<a href="https://go.chatwork.com/ja/">https://go.chatwork.com/ja/</a>)使い、連絡関係、資料やデータのやり取りを行い、制作を進めます。',
		o:''
	},
	{
		t:'',
		q:'途中経過の確認はできますか？',
		a:'中間チェック（アングル・形状チェック）、最終チェックをお送りします。お客様に確認を行っていただいた後に最終仕上げ、最終出力に入ります。',
		o:''
	},
	{
		t:'',
		q:'納期はどれくらいかかりますか？',
		a:'必要な資料が揃ってからCGパースは5営業日、ウォークスルー動画は15営業日、シミュレーションVRは10営業日、ウォークインVRは25営業日、ホームステージングは5営業日にて対応しています。プロジェクトオーダーは依頼の内容によって納期が変わりますので、都度ご相談させて頂きます。但し、初回のご依頼はヒアリングや制作の流れを説明しながら進めますので、上記日数より10営業日程多くかかることをご了承ください。納期については、制作側の実稼働日数でみております。お客様のご都合により、製作作業が中断した日数は含まれておりません。',
		o:''
	},
	{
		t:'',
		q:'どこからキャンセル料が発生しますか？',
		a:'制作着手以降にキャンセルが発生した場合は、制作進行具合状況により、以下のキャンセル費用が発生します。',
		o:`
		<ul>
			<li>中間チェック（アングル･形状チェック）提出前 ： 制作費の25％</li>
			<li>中間チェック（アングル･形状チェック）提出以降 : 製作費の50％</li>
			<li>中間チェック（アングル･形状チェック）以後の修正依頼について、修正対応提出以降：製作費の75％</li>
			<li>最終チェック提出以降 ： 製作費の100％</li>
			<li>その他特別な要望対応の途中キャンセルについては、別途、事業者とマルモリカンパニーの協議にて決定いたします。</li>
		</ul>

		`
	},
	{
		t:'',
		q:'途中修正は可能ですか？',
		a:'制作の途中で中間チェック（アングル･形状チェック）、最終チェックをお送りします。アングル、形状の確認、最終出力前修正を行い、最終出力に入ります。',
		o:''
	},
	{
		t:'',
		q:'納品方法はどうなりますか？',
		a:'CGパースはChatworkまたはメールでの画像データ(.jpg)納品、ウォークスルー動画は大容量データ転送サービスを利用して(.mp4)納品、VR等はURL納品となります。',
		o:''
	}
	// {
	// 	t:'',
	// 	q:'納品検収はどうなりますか？',
	// 	a:'納品成果物を確認頂き問題がなければ、電子署名システム「クラウドサイン」を使い納品書を送ります。届いたURLから納品書が確認できますので、受領のクリックを頂き納品完了となります。FAX等での返送作業がないので、検収に負担がかかりません。',
	// 	o:''
	// },
	// {
	// 	t:'',
	// 	q:'QRコードは作成できますか？',
	// 	a:'ウォークスルー動画については、自社ホームページやYouTube等のデータアップ先を教えて頂ければ作成致します。QRコードの作成方法指導も可能です。シミュレーションVR、ウォークインVR等はURL納品と共にQRコードをお付けします。',
	// 	o:''
	// },
	// {
	// 	t:'',
	// 	q:'QRコードは自社でも作成できますか？',
	// 	a:'どなたでも簡単に作成が可能です。詳しくは制作時にお尋ねください。',
	// 	o:''
	// },
	// {
	// 	t:'',
	// 	q:'取引上の注意事項があれば教えてください。',
	// 	a:'「CGデジタルイメージコンテンツ制作についてのサービス規程」をご覧ください。',
	// 	o:''
	// }
]

export default faqs