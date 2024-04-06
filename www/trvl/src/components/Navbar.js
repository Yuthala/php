import React, {useState} from 'react';
import { Link } from 'react-router-dom';
import { Button } from './Button';
import './Navbar.css';


function Navbar() {

    //состояние клик по гамбургеру
    const [click, setClick] = useState(false);
    //состояние отображения кнопки Sign Up в зависимости от размера экрана
    const [button, setButton] = useState(true);

    //функция клика по гамбургеру
    const handleClick = () => {
        setClick(!click);
    }
    //функция клика по крестику (закрыть меню гамбургер)
    const closeMobileMenu = () => setClick(false);

    //функция, показывающая кнопку Sign Up при ширине экрана 960 и выше, скрывает при ширине <960
    const showButton = () => {
        if(window.innerWidth <= 960) {
            setButton(false)
        } else {
            setButton(true)
        }
    };

    //showButton на событие resize    
    window.addEventListener('resize', showButton);

  return (
    <div>
        <nav className="navbar">
            <div className="navbar-container">
                <Link to="/" className="navbar-logo">
                    TRVL <i className="fab fa-typo3"></i>
                </Link>
                <div className="menu-icon" onClick={handleClick}>
                    <i className={click ? 'fas fa-times' : 'fas fa-bars'} />
                </div>
                <ul className={click ? 'nav-menu active' : 'nav-menu'}>
                    <li className="nav-item">
                        <Link to="/" className="nav-links" onClick={closeMobileMenu}>
                            Home
                        </Link>
                    </li>

                    <li className="nav-item">
                        <Link to="services/" className="nav-links" onClick={closeMobileMenu}>
                            Services
                        </Link>
                    </li>

                    <li className="nav-item">
                        <Link to="/products" className="nav-links" onClick={closeMobileMenu}>
                            Products
                        </Link>
                    </li>

                    <li className="nav-item">
                        <Link 
                            to="/sign-up" className="nav-links-mobile" onClick={closeMobileMenu}>
                            Sign Up
                        </Link>
                    </li>
                </ul>
                {/* if button is true, return Button component */}
                {button && <Button buttonStyle="btn--outline">SIGN UP</Button>}
            </div>
        </nav>
    </div>
  )
}

export default Navbar;