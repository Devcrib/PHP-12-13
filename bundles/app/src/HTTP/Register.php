<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 12/21/2017
 */

namespace Project\App\HTTP;

use PHPixie\AuthLogin\Providers\Password;
use PHPixie\HTTP\Request;
use PHPixie\Validate\Form;
use Project\App\ORM\User\UserRepository;
use Project\App\ORM\User;

class Register extends Processor
{

    /**
     * @param Request $request HTTP Request
     * @return mixed
     * @param $request
     * @return \PHPixie\Template\Container
     */
    public function defaultAction($request) {
        $components = $this->components();

        $template = $components->template()->get('app:register', [

        ]);

        $loginForm = $this->registerForm();
        $template->loginForm = $loginForm;


        // If the form was not submitted then just render the template
        if($request->method() !== 'POST') {
            return $template;
        }

        $data = $request->data();

        // Otherwise process the login
        $loginForm->submit($data->get());

        // If the form is valid and the user logged in successfully redirect him top the frontpage
        if($loginForm->isValid() && $this->processLogin($loginForm)) {
            return $this->redirect('app.welcome');
        }

        // Otherwise just render the page
        return $template;

    }

    protected function processLogin($loginForm)
    {
        // Attempt to login the user
        $user = $this->passwordProvider()->login(
            $loginForm->email,
            $loginForm->password
        );

        // If the password was wrong or the user doesn't exist then add an error to the form
        if($user === null) {
            $loginForm->result()->addMessageError("Invalid email or password");
            return false;
        }

        return true;
    }


    protected function registerForm()
    {
        $validate = $this->components()->validate();
        $validator = $validate->validator();
        $document = $validator->rule()->addDocument();

        $document->allowExtraFields();

        // Name is required
        $document->valueField('fullname')
            ->required("Name is required")
            ->addFilter()
            ->message("Username must contain at least 3 characters");

        // Email is also required and must be valid
        $document->valueField('useremail')
            ->required("Email is required")
            ->filter('email', "Please provide a valid email");

        // Required and must be at least 8 characters long
        $document->valueField('userpass')
            ->required("Password is required")
            ->addFilter()
            ->message("Password must contain at least 8 characters");

        // Also a required field
        $document->valueField('address')
            ->required("Please repeat your password");


        // Build form for this validator
        return $validate->form($validator);
    }

    /**
     * 'password' auth provider that we configured in /assets/config/auth.php
     * @return Password
     */
    protected function passwordProvider()
    {
        $domain = $this->components()->auth()->domain();
        return $domain->provider('password');
    }


}