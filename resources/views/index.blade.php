<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Emails</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">All Emails</h1>

        @forelse ($emails as $email)
            <div class="bg-white shadow rounded-lg p-6 mb-4 border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">{{ $email->subject }}</h2>
                <p class="text-gray-600 mb-1"><span class="font-medium">Name:</span> {{ $email->name }}</p>
                <p class="text-gray-600 mb-3"><span class="font-medium">Content:</span> {{ $email->content }}</p>

                @if ($email->email_account)
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-2"><span class="font-medium">Email Account ID:</span> {{ $email->email_account->id }}</p>
                        <p class="text-gray-700 font-medium mb-1">Accounts:</p>
                        <ul class="list-disc list-inside text-gray-600">
                            @foreach ($email->email_account->accounts as $account)
                                <li>{{ $account->account_mail }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        @empty
            <p class="text-gray-500">No emails found.</p>
        @endforelse
    </div>
</body>
</html>
