<?php
namespace generateur_cv\Controllers;

use generateur_cv\Model\Bean\UserBean;
use generateur_cv\Model\Dao\UserDao;
use generateur_cv\Model\Bean\SkillBean;
use generateur_cv\Model\Dao\SkillDao;
use generateur_cv\Model\Bean\FormationBean;
use generateur_cv\Model\Dao\FormationDao;
use generateur_cv\Model\Bean\KnowledgeBean;
use generateur_cv\Model\Dao\KnowledgeDao;
use Mouf\Mvc\Splash\Annotations\Get;
use Mouf\Mvc\Splash\Annotations\Post;
use Mouf\Mvc\Splash\Annotations\Put;
use Mouf\Mvc\Splash\Annotations\Delete;
use Mouf\Mvc\Splash\Annotations\URL;
use Mouf\Mvc\Splash\Controllers\Controller;
use Mouf\Security\Logged;
use Mouf\Html\Template\TemplateInterface;
use Mouf\Html\HtmlElement\HtmlBlock;
use Mouf\Security\UserService\UserServiceInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use \Twig_Environment;
use Mouf\Html\Renderer\Twig\TwigTemplate;
use Mouf\Mvc\Splash\HtmlResponse;
use Zend\Diactoros\Response;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Diactoros\Response\RedirectResponse;

/**
 * TODO: write controller comment
 */
class RootController
{

    /**
     * The template used by this controller.
     * @var TemplateInterface
     * @var @Compulsory
     */
    private $template;

    /**
     * The main content block of the page.
     * @var HtmlBlock
     */
    private $content;

    /**
     * @var array
     */
    public $outputs;

    /**
     * The Twig environment (used to render Twig templates).
     * @var Twig_Environment
     */
    private $twig;

    /**
     * @var UserServiceInterface
     */
    protected $userService;

    /**
     * @var UserDao
     */
    protected $user;

    /**
     * @var SkillDao
     */
    protected $skill;

    /**
     * @var FormationDao
     */
    protected $formation;

    /**
     * @var KnowledgeDao
     */
    protected $knowledge;


    /**
     * Controller's constructor.
     * @param TemplateInterface $template The template used by this controller
     * @param HtmlBlock $content The main content block of the page
     * @param Twig_Environment $twig The Twig environment (used to render Twig templates)
     */
    public function __construct(TemplateInterface $template,
                                HtmlBlock $content,
                                Twig_Environment $twig,
                                UserServiceInterface $userService,
                                UserDao $user,
                                SkillDao $skill,
                                FormationDao $formation,
                                KnowledgeDao $knowledge
    )
    {
        $this->template = $template;
        $this->content = $content;
        $this->twig = $twig;
        $this->userService = $userService;
        $this->user = $user;
        $this->skill = $skill;
        $this->formation = $formation;
        $this->knowledge = $knowledge;
    }

    /**
     * @URL("/")
     *
     */
    public function index()
    {
        // TODO: write content of action here
        $user = $this->userService->getLoggedUser();

        // Let's add the twig file to the template.
        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/root/index.twig', array("user" => $user)));

        return new HtmlResponse($this->template);
    }

    /**
     * @URL("/form")
     */
    public function editCvForm()
    {

        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/root/form.twig'));

        return new HtmlResponse($this->template);
    }

    /**
     * @URL("/form/cvModel")
     * @post
     */

    public function saveCvForm(RequestInterface $request)
    {
        if ($request) {
            $result = $request->getParsedBody();
            $userObj = new UserBean();

            $userObj->setName($result['name']);
            $userObj->setFirstname($result['firstname']);
            $userObj->setAge($result['age']);
            $userObj->setEmail($result['email']);
            $userObj->setPhone($result['phone']);
            $userObj->setAdress($result['adress']);
            $userObj->setCity($result['city']);
            $userObj->setPostcode($result['postcode']);
            $userObj->setAdressNumber($result['adress_number']);

            $this->user->save($userObj);

            $skillObj = new SkillBean();
            $formationObj = new FormationBean();
            $knowledgeObj = new KnowledgeBean();

            for ($i = 1; $i <= 4; $i++) {

                //$start_date_form = ($result['start_date_form'.$i]);
                //$end_date_form = $result['end_date_form'.$i];
                //$start_date_know = $result['start_date_know'.$i];
                //$end_date_know = $result['end_date_know'.$i];


                $skillObj->setTitle($result['skill_title'.$i]);
                $skillObj->setComment($result['skill_comm'.$i]);
                $skillObj->setLevel($result['level'.$i]);
                $skillObj->setUser();

                $this->skill->save($skillObj);

                $formStartDateObj = new \DateTime($result['start_date_form'.$i]);
                $formEndDateObj = new \DateTime($result['end_date_form'.$i]);


                $formationObj->setTitle($result['form_title'.$i]);
                $formationObj->setAdress($result['form_lieu'.$i]);
                $formationObj->setEstablishment($result['form_etablissement'.$i]);
                $formationObj->setState($result['form_state'.$i]);
                $formationObj->setStartDate($formStartDateObj);
                $formationObj->setEndDate($formEndDateObj);
                $formationObj->setUser();

                $this->formation->save($formationObj);


                $knowStartDateObj = new \DateTime($result['start_date_know'.$i]);
                $knowEndDateObj = new \DateTime($result['end_date_know'.$i]);


                $knowledgeObj->setTitle($result['know_title'.$i]);
                $knowledgeObj->setAdress($result['know_lieu'.$i]);
                $knowledgeObj->setCompany($result['know_societe'.$i]);
                $knowledgeObj->setComment($result['know_comm'.$i]);
                $knowledgeObj->setStartDate($knowStartDateObj);
                $knowledgeObj->setEndDate($knowEndDateObj);
                $knowledgeObj->setUser();


                $this->knowledge->save($knowledgeObj);

            }
        }


        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/root/cvModels.twig'));

        return new HtmlResponse($this->template);

    }
}


