import React from 'react'

const Login = () => {
  return (
    <main className="block bg-white">
                <div className="w-full px-4 login-page">
        <div className="flex flex-wrap mx-4">
            <div className=" md:col-md-6 sm:col-md-12">
                <div className="container">
                    <div className="justify-center">
                        <div className="login m-12 justify-center flex flex-col h-full">
                            <div className="my-12">
                                <h4>Welcome Back!</h4>
                            </div>
                            <form action="http://booking.luxetribes.com/login" method="POST">
                                <input type="hidden" name="_token" value="vAkywpLMGMjydWElSmtmirMZw3wTlPdrVMFEDXVv" />                                <div className="mb-4">
                                    <input type="email" className="form-control " id="email" name="email" placeholder="Email" required />
                                                                    </div>

                                <div className="mb-4">
                                    <input id="password" type="password" className="form-control " name="password" placeholder="Password" required />
    
                                                                    </div>

                                <div className="mb-4 row">
                                    <div className="max-w-full flex-basis-0 flex-grow">
                                        <button type="submit" className="btn w-full overflow-visible border-pink-400 bg-pink-400 hover:bg-pink-500 rounded-md">
                                            Login
                                        </button>
                                    </div>
                                </div>

                                <p className="text-gray-400">Don&#039;t have an account? <a href="http://booking.luxetribes.com/register">Register</a></p>
                                
                                <p className="text-gray-400">Forgot Pasword? <a href="http://booking.luxetribes.com/password/reset">Reset Password?</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div className="md:col-md-6 sm:col-sm-12 p-0">
                <div className="back-grey"></div>
                <div className="front-img absolute">
                    <img src="http://booking.luxetribes.com/images/background/back-8.jpeg" width="400" />
                </div>
                <div className="back-img absolute">
                    <img src="http://booking.luxetribes.com/images/background/back-7.png" alt="" />
                </div>
                <div className="back-img absolute">
                    <img src="http://booking.luxetribes.com/images/background/back-6.jpeg" width="180" />
                </div>
            </div>
        </div>
    </div>
        </main>
  )
}

export default Login