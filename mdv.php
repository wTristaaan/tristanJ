<?php include_once 'inc/base.inc.php' ?>

<body id="page-top">
    <header class="mastheadMdv">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" style="position: relative;top: -120px;">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 id="mdv" class="writeJ mx-auto my-0 text-uppercase"></h1>
                    <img class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s" src="./resources/assets/img/duck.png" alt="Duck" width="10%">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("MDV");</h2>
                    <a class="btn btn-primary">C'est parti</a>
                </div>
            </div>
        </div>
    </header>
    <section class="about-section text-center" id="aPropos">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <div style="margin: 2%">
                        <h2 class="text-white mb-4 wow animate__animated animate__backInLeft">Le mouton des villes</h2>
                        <i class="fas fa-info fa-2x mb-2 text-white wow animate__animated animate__backInRight"></i>
                    </div>
                    <p class="text-white-50 wow animate__animated animate__backInLeft">
                        MDV est un site web servant à mettre en avant des produits destinés à la vente.
                        L'utilisatrice voulait une application qu'elle puisse prendre en main pour pouvoir être autonome. Nous avons donc créé un compte utilisateur,
                        amenant à une page de gestion en back end. Cette dernière lui permettait de remplir la base de données grâce à des formulaires.
                        <a target="_blank" href="https://lemoutondesvilles.fr">Sur cette page</a>
                        vous trouverez le site en ligne.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="projects-section bg-light" id="projets">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center text-center">
                <div class="col-lg-8" style="margin: 2%">
                    <h2 class="text-black mb-4 wow animate__animated animate__bounceIn">Ce que j'ai fait</h2>
                    <i class="fas fa-cog fa-2x mb-2 text-black wow animate__animated animate__bounceIn"></i>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <img width="100%" src="./resources/assets/img/MDV/indexMDV.png" alt="Index MDV">
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Le mouton des villes.</h4>
                        <p class="mb-0 text-black-50">Répondant à un cahier des charges, et en équipe,
                            le but était de mettre à disposition des utilisateurs un site web servant à la présentation et mise en avant de produits.
                            Ce projet a été bâti de 0 en utilisant le Framework Symfony.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Création d'une base de données avec Symfony.</h4>
                                <p class="text-black-50 mb-0">Symfony est un framework PHP nécessitant une base de données pour fonctionner.</p>
                                <a class="text-black-50 mb-0" href="https://symfony.com/doc/current/doctrine.html">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/MDV/creationBDDMdv.png" alt="MDV symfony BDD">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP d'un exemple d'entity créé par Symfony.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                        <code class="php">
namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}

                        </code>
                    </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/MDV/avisUtilMdv.png" alt="MDV avis utilisateurs">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Le client souhaitait référencer les avis de ses clients sur sa page d'accueil.</h4>
                                <p class="text-black-50 mb-0">Nous les avons mis dans la base de données puis récupérés pour les afficher dans un carrousel.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP du Controller qui récupère les avis clients.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
public function index(): Response
    {

        $listReviews = $this->getDoctrine()->getRepository(Reviews::class)->findAll();
        $listVideos =  $this->getDoctrine()->getRepository(Videos::class)->findby(['online' => true], ['id'=>'DESC']);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController', 'toutesLesReviews' => $listReviews, 'toutesLesVideos' => $listVideos,
        ]);
    }
                    </code>
                </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP permettant de transférer les données de la BDD en json grâce à twig.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
for review in toutesLesReviews
        messages.push(review.message | json_encode(constant('JSON_UNESCAPED_UNICODE')) | raw )
        firstName.push(review.firstname | json_encode(constant('JSON_UNESCAPED_UNICODE')) | raw )
        lastName.push(review.lastname | json_encode(constant('JSON_UNESCAPED_UNICODE')) | raw )
endfor 

                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Le client souhaitait mettre en avant des vidéos sur sa page d'accueil.</h4>
                                <p class="text-black-50 mb-0">Nous lui avons mis un formulaire a disposition qu'il peut remplir avec une vidéo qui sera affichée dans l'index.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/MDV/videoMdv.png" alt="MDV vidéos">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP du Controller qui récupère les vidéos.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
public function index(): Response
    {

        $listReviews = $this->getDoctrine()->getRepository(Reviews::class)->findAll();
        $listVideos =  $this->getDoctrine()->getRepository(Videos::class)->findby(['online' => true], ['id'=>'DESC']);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController', 'toutesLesReviews' => $listReviews, 'toutesLesVideos' => $listVideos,
        ]);
    }
                    </code>
                </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP permettant d'afficher les vidéos.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
for videos in toutesLesVideos | slice(0, 3)
    if videos.online == true
        vich_uploader_asset(videos, 'videoFile')
            videos.title
    endif
endfor
                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/MDV/produits.png" alt="MDV produits">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Boutique et mise en avant produits.</h4>
                                <p class="text-black-50 mb-0">Le client souhaitait mettre en avant des produits sur une page dédiée.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP du Controller qui récupère les produits.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
                    namespace App\Controller;

use App\Entity\Products;
use App\Entity\ProductsClothes;
use App\Entity\Reviews;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/products", name="products", methods={"GET|POST"})
     * @return Response
     */
    public function index(): Response
    {
        $products= $this->getDoctrine()->getRepository(Products::class)->findBy([], ['id'=>'DESC']);
        $productsClothes= $this->getDoctrine()->getRepository(ProductsClothes::class)->findBy([], ['id'=>'DESC']);

        return $this->render('products/index.html.twig', [
            'controller_name' => 'ProductsController',
            'products'=>$products, 'productsClothes'=>$productsClothes
        ]);
    }
}
                    </code>
                </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP permettant d'afficher les produits.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
for produit in products | slice(0, products|length)
    if produit.online == true
        if produit.image !=null
            produit.lien
            else
        endif
        produit.title
        produit.description
        if produit.longueur == null %}
             else
        endif
        if produit.hauteur == null 
        else
            produit.hauteur }}
        endif
        if produit.profondeur == null %}
        else 
            produit.profondeur }}</h4>
        endif 
        if produit.poids == null 
        else
            produit.poids }}<
        endif
        if produit.composition == null
        else 
            produit.composition
        endif
    endif
endfor
                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Galerie.</h4>
                                <p class="text-black-50 mb-0">Le client souhaitait mettre en avant ses services sur une page dédiée.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/MDV/galerie.png" alt="MDV gallerie">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP du Controller qui récupère les services.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
/**
* @Route ("/gallery", name="gallery")
*/
public function gallery(): Response
    {
        $gallery = $this->getDoctrine()->getRepository(Gallery::class)->findBy([], ['id' => 'DESC']);

        return $this->render('default/gallery.html.twig', [
            'controller_name' => 'DefaultController', 'gallery' => $gallery,
        ]);
    }
                    </code>
                </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP permettant d'afficher les services.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
for creation in gallery
    if creation.domaine == 'Logo'
        if creation.image != null 
            vich_uploader_asset(creation, 'imageFile')
        else
        endif
            creation.title
            if creation.description != null
                creation.description
            else
            endif
        endif
endfor
                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/MDV/contact.png" alt="MDV contact">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Page de Contact.</h4>
                                <p class="text-black-50 mb-0">Le client souhaitait pouvoir recevoir un retour de ses clients.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP du Controller permet l'envoi du formulaire.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
                        
namespace App\Controller;

use App\Entity\Contact;
use App\Entity\QrCode;
use App\Form\ContactType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @param MailerInterface $mailer
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function contact(Request $request, MailerInterface $mailer): Response
    {
        $contact = new Contact();
        $QrCode = $this->getDoctrine()->getRepository(QrCode::class)->findAll();
        $form = $this->createForm(ContactType::class, $contact)->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $email = (new TemplatedEmail())
                ->from($contact->getMail())
                ->to('contact@lemoutondesvilles.fr')
                ->subject('demande de devis')
                ->htmlTemplate('mail/ContactMail.html.twig')
                ->context([
                    'firstname'=>$contact->getFirstname(),
                    'lastname'=>$contact->getLastname(),
                    'phone'=>$contact->getPhone(),
                    'subject'=>$contact->getSubject(),
                    'message'=>$contact->getMessage(),
                ]);

            $mailer->send($email);


            $this->addFlash('success', 'Email envoyé');
            return $this->redirectToRoute('contact');
        }
        return $this->render('form/contact.html.twig', [
            'form' => $form->createView(),
            'QrCode'=> $QrCode
        ]);
    }
}
                    </code>
                </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code permettant de lier le site web à un mailler.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
MAILER_DSN=smtp://contact@lemoutondesvilles.fr:ex2Lj57@console5.axinet.fr?encryption=tls&auth_mode=login
                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Back-end</h4>
                                <p class="text-black-50 mb-0">Le client souhaitait pouvoir manager son site. Nous avons donc créé un utilisateur ayant les droits administrateurs.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/MDV/login.png" alt="MDV login">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code permettant d'authentifier l'utilisateur.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="php">
namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Guard\PasswordAuthenticatedInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator implements PasswordAuthenticatedInterface
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    private $entityManager;
    private $urlGenerator;
    private $csrfTokenManager;
    private $passwordEncoder;

    public function __construct(EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator, CsrfTokenManagerInterface $csrfTokenManager, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->passwordEncoder = $passwordEncoder;
    }

    public function supports(Request $request)
    {
        return self::LOGIN_ROUTE === $request->attributes->get('_route')
            && $request->isMethod('POST');
    }

    public function getCredentials(Request $request)
    {
        $credentials = [
            'email' => $request->request->get('email'),
            'password' => $request->request->get('password'),
            'csrf_token' => $request->request->get('_csrf_token'),
        ];
        $request->getSession()->set(
            Security::LAST_USERNAME,
            $credentials['email']
        );

        return $credentials;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $token = new CsrfToken('authenticate', $credentials['csrf_token']);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException();
        }

        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $credentials['email']]);

        if (!$user) {
            throw new UsernameNotFoundException('Votre email n\'est pas reconnu.');
        }

        return $user;
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        return $this->passwordEncoder->isPasswordValid($user, $credentials['password']);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function getPassword($credentials): ?string
    {
        return $credentials['password'];
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $providerKey)
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $providerKey)) {
            return new RedirectResponse($targetPath);
        }

         return new RedirectResponse($this->urlGenerator->generate('default'));
//        throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }

    protected function getLoginUrl()
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/MDV/mdvGit.png" alt="Tholdi Github">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4></h4>
                                <p class="text-black-50 mb-0">Création d'un Github pour travailler en équipe.</p>
                                <a href="https://github.com/ptitdim78/mdv2">
                                    <p class="mb-0 text-black-50">Ici.</p>
                                </a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; JOUBERT Tristan &#169; 2017 - <?php echo $today = date("Y"); ?>
    </footer>
</body>