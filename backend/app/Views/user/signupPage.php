<!DOCTYPE html>
<html lang="en">
  <?= view('components/head', [
          'title' => 'My Coffee | Sign up'
      ])?>
<body class="bg-[#2b1e13] text-white flex items-center justify-center min-h-screen">

  <!-- Signup Card -->
  <div class="bg-[#e5d6cc] p-8 rounded-xl shadow-lg w-full max-w-md">
    <h2 class="text-3xl text-[#4E342E] font-bold text-center mb-6">Sign Up</h2>

    <form action="/signup" method="POST" class="space-y-4">
      <!-- Name -->
      <div>
        <label for="name" class="block text-sm text-[#4E342E] font-semibold mb-1">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name"
               class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none" style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)" required>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm text-[#4E342E] font-semibold mb-1">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email"
               class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none" style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)" required>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm text-[#4E342E] font-semibold mb-1">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password"
               class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none" style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)"required>
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="confirm" class="block text-sm text-[#4E342E] font-semibold mb-1">Confirm Password</label>
        <input type="password" id="confirm" name="confirm" placeholder="Confirm your password"
               class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none" style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)" required>
      </div>

      <!-- Submit -->
      <button type="submit"
              class="w-full bg-[#4E342E] hover:bg-[#8d6249] transition duration-300 py-2 rounded-lg font-bold">
        Sign Up
      </button>
    </form>

    <!-- Link to Login -->
    <p class="text-center text-[#4E342E] text-sm mt-4">
      Already have an account?
      <a href="/login" class="text-blue-400 hover:underline">Login</a>
    </p>
  </div>

</body>
</html>
