<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset("css/output.css") }}" />
  <title>login -{{ env("APP_NAME") }}</title>
</head>

<body class="p-0 m-0 box-border">
  <!-- main part -->
  <section class="h-[100vh]">
    <!-- form layout -->
    <div class="relative  h-full w-full">
      <div class="w-full flex items-center justify-center h-full bg-[#F2F8FA]">
        <div class="w-[40%] bg-[#FFFFFF] rounded-[12px] shadow-xl">
          <div class="mx-auto flex h-full px-12 flex-col justify-center text-black ">
            <div class="pt-5">
              <p class="text-3xl mb-2">Login Page |</p>
              <p class="text-2xl text-[#0690cf]">please login to continue |</p>
            </div>
            <div class="mt-16">
              <form  action="{{ route("login") }}" method="POST">
                @csrf
                <div>
                  <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                  <div class="relative mb-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                      </svg>
                    </div>


                    <input type="text" id="input-group-1"
                      name="email"
                      class="bg-gray-50 border-2 border-gray-200 text-black text-sm rounded-lg   block w-full pl-10 p-3 transition-all  hover:border-[#0690cf] outline-0 focus:border-[#0690cf] shadow focus:shadow-lg"
                      placeholder="example@example.com">
                  </div>
                  <!-- error for email -->
                  @error("email")
                    <p class="text-red-500 text-[15px] font-[500] mb-3 ml-1">{{ $message }}</p>
                  @enderror


                  <div class="mt-2">
                    <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900">Your
                      Password</label>
                    <div class="relative mb-1">
                      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 " fill="currentColor" viewBox="0 0 15 15"
                          xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 11H10V10H11V11Z" fill="black" />
                          <path d="M8 11H9V10H8V11Z" fill="black" />
                          <path d="M13 11H12V10H13V11Z" fill="black" />
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3 6V3.5C3 1.567 4.567 0 6.5 0C8.433 0 10 1.567 10 3.5V6H11.5C12.3284 6 13 6.67157 13 7.5V8.05001C14.1411 8.28164 15 9.29052 15 10.5C15 11.7095 14.1411 12.7184 13 12.95V13.5C13 14.3284 12.3284 15 11.5 15H1.5C0.671573 15 0 14.3284 0 13.5V7.5C0 6.67157 0.671573 6 1.5 6H3ZM4 3.5C4 2.11929 5.11929 1 6.5 1C7.88071 1 9 2.11929 9 3.5V6H4V3.5ZM8.5 9C7.67157 9 7 9.67157 7 10.5C7 11.3284 7.67157 12 8.5 12H12.5C13.3284 12 14 11.3284 14 10.5C14 9.67157 13.3284 9 12.5 9H8.5Z"
                            fill="black" />
                        </svg>
                      </div>
                      <input type="password" id="input-group-1"
                        name="password"
                        class="bg-gray-50 border-2 border-gray-200  text-gray-900 text-sm rounded-lg   block w-full pl-10 p-3 transition-all  hover:border-[#0690cf] outline-0 focus:border-[#0690cf] shadow focus:shadow-lg "
                        placeholder="****">
                    </div>

                    <!-- error for pass -->
                    @error("password")
                        <p class="text-red-500 text-[15px] font-[500] py-2 ml-1">{{ $message }}</p>
                    @enderror

                    <div class="mt-4 flex w-full flex-col justify-between sm:flex-row">
                      <!-- Remember me -->
                      <div><input type="checkbox" name="remember" id="remember" class="cursor-pointer hover:text-[#0690cf]" /><label
                          for="remember" class="mx-2 text-sm cursor-pointer hover:text-[#0690cf]">Remember
                          me</label></div>
                      <!-- Forgot password -->
                      <div>
                        <a href="#" class="text-sm hover:text-[#0690cf]">Forgot password?</a>
                      </div>
                    </div>
                    <div class="my-10">
                      <button
                        class="w-full rounded-[12px] bg-[#0690cf] p-2.5 shadow-md hover:shadow-xl transition-all text-white text-[16px]">Login</button>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</body>

</html>