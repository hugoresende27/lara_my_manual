<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ codecheef ]]></title>
        <link><![CDATA[ https://example.com/feed ]]></link>
        <description><![CDATA[ A Nice Description Of Your Website! ]]></description>
        <language>en</language>
        <pubDate>{{ now()->toDayDateTimeString('Asia/Dhaka') }}</pubDate>

        @foreach($users as $user)
            <item>
                <title><![CDATA[{{ $user->name }}]]></title>
                <link>{{ $user->id }}</link>
                <description><![CDATA[{!! $user->email !!}]]></description>
                <category>{{ $user->createt_at }}</category>
                <author><![CDATA[{{ $user->name  }}]]></author>
                <guid>{{ $user->id }}</guid>
                <pubDate>{{ $user->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
