<div id="authPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
  <div class="relative w-96 rounded bg-white p-6 shadow-lg">
    <div id="formContainer">
      <div id="loginForm" class="auth-form">
        <h2 class="mb-4 text-lg font-semibold">Login</h2>
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="mb-4">
            <label for="loginEmail" class="block text-gray-700">Email</label>
            <input type="email" id="loginEmail" name="email" class="w-full rounded border border-gray-300 p-2 focus:outline-none focus:ring focus:ring-blue-300" placeholder="Email" required />
          </div>
          <div class="mb-4">
            <label for="loginPassword" class="block text-gray-700">Password</label>
            <input type="password" id="loginPassword" name="password" class="w-full rounded border border-gray-300 p-2 focus:outline-none focus:ring focus:ring-blue-300" placeholder="Password" required />
          </div>
          <button type="submit" class="rounded bg-blue-500 px-4 py-2 text-white">Login</button>
          <p class="mt-4 text-sm text-gray-600">
            Don't have an account?
            <a href="#" onclick="showSignupForm()" class="text-blue-500 hover:underline">Sign up</a>
          </p>
        </form>
      </div>

      <div id="signupForm" class="auth-form hidden">
        <h2 class="mb-4 text-lg font-semibold">Sign Up</h2>
        <form action="{{ route('signup') }}" method="POST">
          @csrf
          <div class="mb-4">
            <label for="signupEmail" class="block text-gray-700">Email</label>
            <input type="email" id="signupEmail" name="email" class="w-full rounded border border-gray-300 p-2 focus:outline-none focus:ring focus:ring-blue-300" placeholder="Email" required />
          </div>
          <div class="mb-4">
            <label for="signupPassword" class="block text-gray-700">Password</label>
            <input type="password" id="signupPassword" name="password" class="w-full rounded border border-gray-300 p-2 focus:outline-none focus:ring focus:ring-blue-300" placeholder="Password" required />
          </div>
          <button type="submit" class="rounded bg-green-500 px-4 py-2 text-white">Sign Up</button>
          <p class="mt-4 text-sm text-gray-600">
            Already have an account?
            <a href="#" onclick="showLoginForm()" class="text-blue-500 hover:underline">Login</a>
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