<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cloud Computing Class Enrollment</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    body {
      background: linear-gradient(-45deg, #dbeafe, #fce7f3, #f3e8ff, #e0f2fe);
      background-size: 400% 400%;
      animation: gradientShift 12s ease infinite;
    }

    /* 💎 Glassmorphic shimmer effect */
    .glass-card {
      backdrop-filter: blur(20px);
      background: rgba(255, 255, 255, 0.35);
      box-shadow: 0 8px 32px rgba(31, 38, 135, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.25);
      position: relative;
      overflow: hidden;
    }

   /* hovering setting  */
    .glass-card::before {
      content: "";
      position: absolute;
      top: -100%;
      left: -100%;
      width: 200%;
      height: 200%;
      background: linear-gradient(120deg, rgba(255,255,255,0.2) 0%, transparent 60%);
      transform: rotate(25deg);
      transition: opacity 0.4s ease;
      opacity: 0;
      pointer-events: none;
    }

    .glass-card:hover::before {
      opacity: 1;
      animation: shimmer 2s ease-in-out infinite;
    }

    @keyframes shimmer {
      0% { transform: translateX(-100%) rotate(25deg); }
      100% { transform: translateX(100%) rotate(25deg); }
    }

    /* 🫧 Soft fade-in */
    .fade-enter {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s ease-out;
    }
    .fade-enter-active {
      opacity: 1;
      transform: translateY(0);
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const container = document.querySelector("#main-container");
      setTimeout(() => container.classList.add("fade-enter-active"), 100);
    });
  </script>
</head>

<body class="min-h-screen flex items-center justify-center p-6">
  <div id="main-container" class="fade-enter max-w-lg w-full glass-card rounded-2xl p-8 transition-all duration-700 ease-out">

    <div class="text-center mb-8">
      <h1 class="text-3xl font-semibold text-gray-900 mt-2 tracking-tight">Cloud Computing Class</h1>
      <p class="text-gray-700/70 text-sm mt-1">Enroll now for an exclusive learning experience</p>
    </div>

    @if ($errors->any())
      <div class="bg-red-50/60 border border-red-200 text-red-700 p-3 rounded mb-4 animate-pulse">
        <ul class="list-disc ml-5 space-y-1 text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('send.email') }}" method="POST" class="space-y-5"> 
      @csrf

      <div>
        <label class="block font-medium text-gray-800 mb-1">Full Name</label>
        <input type="text" name="name" value="{{ old('name') }}"
          class="w-full border border-gray-300/70 focus:border-black focus:ring-1 focus:ring-black rounded-xl p-3 bg-white/60 backdrop-blur-md transition-all duration-200">
      </div>

      <div>
        <label class="block font-medium text-gray-800 mb-1">Student Email</label>
        <input type="email" name="new_account_mail" value="{{ old('new_account_mail') }}" placeholder="user@example.com"
          class="w-full border border-gray-300/70 focus:border-black focus:ring-1 focus:ring-black rounded-xl p-3 bg-white/60 backdrop-blur-md transition-all duration-200">
        <p class="text-gray-600 text-xs mt-1">A new account will be created automatically.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block font-medium text-gray-800 mb-1">Password</label>
          <input type="password" name="password" value="{{ old('password') }}"
            class="w-full border border-gray-300/70 focus:border-black focus:ring-1 focus:ring-black rounded-xl p-3 bg-white/60 backdrop-blur-md transition-all duration-200">
        </div>
        <div>
          <label class="block font-medium text-gray-800 mb-1">Confirm Password</label>
          <input type="password" name="re-password" value="{{ old('password') }}"
            class="w-full border border-gray-300/70 focus:border-black focus:ring-1 focus:ring-black rounded-xl p-3 bg-white/60 backdrop-blur-md transition-all duration-200">
        </div>
      </div>

      <div>
        <label class="block font-medium text-gray-800 mb-1">Birthdate</label>
        <input type="date" name="birthdate" value="{{ old('birthdate') }}"
          class="w-full border border-gray-300/70 focus:border-black focus:ring-1 focus:ring-black rounded-xl p-3 bg-white/60 backdrop-blur-md transition-all duration-200">
      </div>

      <div class="pt-4">
        <button type="submit"
          class="w-full bg-black text-white px-4 py-3 rounded-xl hover:bg-gray-900 transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
          Enroll Now
        </button>
      </div>
    </form>

    <p class="text-center text-gray-500 text-xs mt-6">
      © 2025 Cloud Computing Class — Designed by Surya
    </p>
  </div>
</body>
</html>
