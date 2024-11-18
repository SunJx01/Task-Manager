<div id="authPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
  <div class="relative w-full max-w-sm rounded-lg bg-white p-6 shadow-xl md:max-w-md">
    <div id="formContainer">
   
      <div id="loginForm" class="auth-form">
        <h2 class="mb-6 text-center text-2xl font-bold text-gray-800">Login</h2>
        <form action="{{ route('login') }}" method="POST">
          @csrf
          @if($data)
          <div class="text-red-600 font-sans text-center">{{$data}}</div> 
          @endif
          <div class="mb-5">
            <label for="loginEmail" class="block mb-2 text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="loginEmail" name="email" class="w-full rounded-md border border-gray-300 p-3 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Email" required />
            <div class="text-red-600 font-sans text-center">@error('email'){{$message}}@enderror</div>
          </div>
          <div class="mb-5">
            <label for="loginPassword" class="block mb-2 text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="loginPassword" name="password" class="w-full rounded-md border border-gray-300 p-3 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password" required />
          </div>
          <div class="text-red-600 font-sans text-center">@error('password'){{$message}}@enderror</div>
          <button type="submit" class="w-full rounded-md bg-blue-500 p-3 text-white hover:bg-blue-600 focus:ring-2 focus:ring-blue-400">
            Login
          </button>
          <p class="mt-6 text-center text-sm text-gray-600">
            Don't have an account?
            <a href="#" onclick="showSignupForm()" class="text-blue-500 hover:text-blue-600 hover:underline">Sign up</a>
          </p>
        </form>
      </div>

      <div id="signupForm" class="auth-form hidden">
        <h2 class="mb-6 text-center text-2xl font-bold text-gray-800">Sign Up</h2>
        <form action="{{ route('signup') }}" method="POST">
          @csrf
          @if($data)
          <div class="text-red-600 font-sans text-center">{{$data}}</div>
          @endif
          <div class="mb-5">
            <label for="signupEmail" class="block mb-2 text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="signupEmail" name="email" class="w-full rounded-md border border-gray-300 p-3 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Email" required />
            <div class="text-red-600 font-sans text-center">@error('email'){{$message}}@enderror</div>
          </div>
          <div class="mb-5">
            <label for="signupPassword" class="block mb-2 text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="signupPassword" name="password" class="w-full rounded-md border border-gray-300 p-3 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password" required />
            <div class="text-red-600 font-sans text-center">@error('password'){{$message}}@enderror</div>
          </div>
          <button type="submit" class="w-full rounded-md bg-green-500 p-3 text-white hover:bg-green-600 focus:ring-2 focus:ring-green-400">
            Sign Up
          </button>
          <p class="mt-6 text-center text-sm text-gray-600">
            Already have an account?
            <a href="#" onclick="showLoginForm()" class="text-blue-500 hover:text-blue-600 hover:underline">Login</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  function togglePopup(popupId) {
    const popup = document.getElementById(popupId);
    popup.classList.toggle('hidden');
  }

  function showLoginForm() {
    document.getElementById('loginForm').classList.remove('hidden');
    document.getElementById('signupForm').classList.add('hidden');
  }

  function showSignupForm() {
    document.getElementById('signupForm').classList.remove('hidden');
    document.getElementById('loginForm').classList.add('hidden');
  }
</script>
