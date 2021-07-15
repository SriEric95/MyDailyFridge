<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountPasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/compte/modifier-mot-de-passe", name="account_password")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder)
    {   
        $notification = null;
        $user = $this->getUser();

        $form = $this->createForm(ChangePasswordType::class, $user);
        $form->handleRequest($request);

        //Il faut que la prop password et confirm_mdp avec les mêmes valeurs
        $user->setConfirm_mdp($user->getPassword());

        if ($form->isSubmitted() && $form->isValid()) 
        {
            
            $old_pwd = $form->get('old_password')->getData();
            

            if ($encoder->isPasswordValid($user, $old_pwd))
            {   
                $new_pwd = $form->get('new_password')->getData();
                
                $password = $encoder->encodePassword($user, $new_pwd);

                $user->setPassword($password);
                $this->entityManager->flush();
                $notification = "Votre mot de passe a bien été mis à jour";

            }
            else {
                $notification = "Votre mot de passe n'est pas le bon";
            }
        }

        return $this->render('account_password/index.html.twig', [
            'form' => $form->createView(),
            'notification' => $notification
        ]);
    }
    
}