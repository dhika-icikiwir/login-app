<x-layout title="login">
        <div class="hero min-h-[calc(100vh-16rem)]">
            <div class="hero-content flex-col">
                <div class="card w-96 bg-base-100">
                    <div class="card-body">
                        <h1 class="text-3xl font-bold text-center mb-6">Welcome Back</h1>

                        <form method="POST" action="/login">
                            @csrf

                            <!-- Email -->
                            <label class="floating-label mb-6">
                                <input type="email" name="email"
                                    placeholder="[mail@example.com](<mailto:mail@example.com>)"
                                    value="{{ old('email') }}"
                                    class="input input-bordered @error('email')
input-error
@enderror" required
                                    autofocus>
                                <span>Email</span>
                            </label>
                            @error('email')
                                <div class="label -mt-4 mb-2">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror

                            <!-- Password -->
                            <label class="floating-label mb-6">
                                <input type="password" name="password" placeholder="••••••••"
                                    class="input input-bordered @error('password') input-error @enderror" required>
                                <span>Password</span>
                            </label>
                            @error('password')
                                <div class="label -mt-4 mb-2">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror

                            <!-- Remember Me -->
                            <div class="form-control mt-4">
                                <label class="label cursor-pointer justify-start">
                                    <input type="checkbox" name="remember" class="checkbox">
                                    <span class="label-text ml-2">Remember me</span>
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-control mt-8">
                                <button type="submit" class="btn btn-primary btn-sm w-full">
                                    Sign In
                                </button>
                            </div>
                        </form>

                        <div class="divider">OR</div>
                        <div class="form-control mt-4">
                            <a href="/auth/google"
                                class="btn btn-outline w-full flex items-center justify-center gap-3">

                                <!-- Google Icon -->
                                <svg class="w-5 h-5" viewBox="0 0 48 48">
                                    <path fill="#EA4335"
                                        d="M24 9.5c3.54 0 6.34 1.54 8.22 3.24l6.1-6.1C34.64 3.1 29.74 1 24 1 14.84 1 6.91 6.38 3.2 14.22l7.26 5.63C12.3 13.46 17.66 9.5 24 9.5z" />
                                    <path fill="#4285F4"
                                        d="M46.1 24.5c0-1.64-.14-2.86-.45-4.14H24v7.82h12.74c-.26 2.06-1.66 5.16-4.78 7.26l7.33 5.68C43.58 37.14 46.1 31.6 46.1 24.5z" />
                                    <path fill="#FBBC05"
                                        d="M10.46 28.85a14.6 14.6 0 010-9.2l-7.26-5.63a23.93 23.93 0 000 20.46l7.26-5.63z" />
                                    <path fill="#34A853"
                                        d="M24 47c5.74 0 10.64-1.88 14.18-5.12l-7.33-5.68c-1.96 1.38-4.6 2.34-6.85 2.34-6.34 0-11.7-3.96-13.54-9.36l-7.26 5.63C6.91 41.62 14.84 47 24 47z" />
                                </svg>

                                <span>Continue with Google</span>
                            </a>
                        </div>

                        <p class="text-center text-sm">
                            Don't have an account?
                            <a href="/register" class="link link-primary">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</x-layout>