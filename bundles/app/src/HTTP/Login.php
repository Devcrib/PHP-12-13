<?php

namespace Project\App\HTTP;


use PHPixie\HTTP\Request;
use PHPixie\Validate\Form;
use Project\App\ORM\UserRepository;
use Project\App\ORM\User;

/**
 * User authentication
 */
class Login extends Processor
{
    /**
     * @param Request $request HTTP request
     * @return mixed
     */
    public function defaultAction($request)
    {

        $components = $this->components();

        // Build the template and the form
        $template = $components->template()->get('app:login', [

        ]);

        $loginForm = $this->loginForm();
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

    /**
     * Login processing
     *
     * @param Form $loginForm
     * @return bool Whether the user has logged in successfully
     */
    protected function processLogin($loginForm)
    {
        $component = $this->components();
        $user = $component->orm()->query('users')->find();
        var_dump($user); die();

        $user = true;
        // If the password was wrong or the user doesn't exist then add an error to the form
        if($user === null) {
            $loginForm->result()->addMessageError("Invalid email or password");
            return false;
        }

        return true;
    }

    /**
     * Logout
     * @return mixed
     */
    public function logoutAction()
    {
        // Get the auth domain and log the user out
        $domain = $this->components()->auth()->domain();
        $domain->forgetUser();

        // Then redirect him back to the frontpage
        return $this->redirect('app.welcome');
    }

    /**
     * Build login form
     * @return Form
     */
    protected function loginForm()
    {
        $validate = $this->components()->validate();
        $validator = $validate->validator();

        // We use the document validator,
        // it's the one you will be using in most cases
        $document = $validator->rule()->addDocument();
        $document->allowExtraFields();

        // Both fields are required
        $document->valueField('useremail')
            ->required("Email is required");

        $document->valueField('userpass')
            ->required("Password is required");

        // Return the form for this validator
        return $validate->form($validator);
    }



}