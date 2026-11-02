const menuToggle = document.querySelector('[data-menu-toggle]');
const nav = document.querySelector('[data-nav]');

if (menuToggle && nav) {
  const drawer = menuToggle.closest('.nav-drawer');

  if (!drawer) {
    throw new Error('O contêiner do menu de navegação não foi encontrado.');
  }

  menuToggle.addEventListener('click', () => {
    const isOpen = drawer.classList.toggle('is-open');
    menuToggle.setAttribute('aria-expanded', String(isOpen));
    menuToggle.setAttribute('aria-label', isOpen ? 'Fechar menu' : 'Abrir menu');
  });

  nav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      drawer.classList.remove('is-open');
      menuToggle.setAttribute('aria-expanded', 'false');
      menuToggle.setAttribute('aria-label', 'Abrir menu');
    });
  });

  window.matchMedia('(max-width: 720px)').addEventListener('change', () => {
    drawer.classList.remove('is-open');
    menuToggle.setAttribute('aria-expanded', 'false');
    menuToggle.setAttribute('aria-label', 'Abrir menu');
  });
}

const accessibilityToggle = document.querySelector('[data-accessibility-toggle]');
const accessibilityPanel = document.querySelector('[data-accessibility-panel]');
const accessibilityClose = document.querySelector('[data-accessibility-close]');
const accessibilityStatus = document.querySelector('[data-accessibility-status]');

if (
  accessibilityToggle instanceof HTMLButtonElement
  && accessibilityPanel instanceof HTMLElement
  && accessibilityStatus instanceof HTMLElement
) {
  const storageKey = 'michele-accessibility-preferences';
  const fontSizes = [100, 110, 120, 130];
  const root = document.documentElement;
  const decreaseButton = accessibilityPanel.querySelector('[data-font-decrease]');
  const increaseButton = accessibilityPanel.querySelector('[data-font-increase]');
  const fontSizeOutput = accessibilityPanel.querySelector('[data-font-size]');
  const settingButtons = accessibilityPanel.querySelectorAll('[data-accessibility-setting]');
  const preferences = {
    fontSize: 100,
    contrast: false,
    links: false,
    motion: false,
  };

  const announce = (message) => {
    accessibilityStatus.textContent = message;
  };

  const updatePanel = () => {
    root.style.setProperty('--accessibility-font-size', `${preferences.fontSize}%`);
    root.dataset.highContrast = String(preferences.contrast);
    root.dataset.linksHighlighted = String(preferences.links);
    root.dataset.reducedMotion = String(preferences.motion);

    if (fontSizeOutput instanceof HTMLOutputElement) {
      fontSizeOutput.value = `${preferences.fontSize}%`;
      fontSizeOutput.textContent = `${preferences.fontSize}%`;
    }
    if (decreaseButton instanceof HTMLButtonElement) {
      decreaseButton.disabled = preferences.fontSize === fontSizes[0];
    }
    if (increaseButton instanceof HTMLButtonElement) {
      increaseButton.disabled = preferences.fontSize === fontSizes[fontSizes.length - 1];
    }

    settingButtons.forEach((button) => {
      if (!(button instanceof HTMLButtonElement)) {
        return;
      }

      const setting = button.dataset.accessibilitySetting;
      const enabled = setting === 'contrast'
        ? preferences.contrast
        : setting === 'links'
          ? preferences.links
          : setting === 'motion'
            ? preferences.motion
            : false;
      button.setAttribute('aria-pressed', String(enabled));
    });
  };

  const savePreferences = () => {
    try {
      window.localStorage.setItem(storageKey, JSON.stringify(preferences));
    } catch (error) {
      console.error('Não foi possível salvar as preferências de acessibilidade.', error);
      announce('As alterações foram aplicadas, mas não puderam ser salvas neste navegador.');
    }
  };

  try {
    const savedPreferences = window.localStorage.getItem(storageKey);
    if (savedPreferences) {
      const parsed = JSON.parse(savedPreferences);
      if (parsed && typeof parsed === 'object') {
        if (fontSizes.includes(parsed.fontSize)) {
          preferences.fontSize = parsed.fontSize;
        }
        preferences.contrast = parsed.contrast === true;
        preferences.links = parsed.links === true;
        preferences.motion = parsed.motion === true;
      }
    }
  } catch (error) {
    console.error('Não foi possível carregar as preferências de acessibilidade.', error);
    announce('Não foi possível carregar as preferências salvas neste navegador.');
  }

  updatePanel();

  accessibilityToggle.addEventListener('click', () => {
    const isOpen = accessibilityPanel.hidden;
    accessibilityPanel.hidden = !isOpen;
    accessibilityToggle.setAttribute('aria-expanded', String(isOpen));
    if (isOpen) {
      const firstButton = accessibilityPanel.querySelector('button:not(:disabled)');
      if (firstButton instanceof HTMLButtonElement) {
        firstButton.focus();
      }
    }
  });

  accessibilityClose?.addEventListener('click', () => {
    accessibilityPanel.hidden = true;
    accessibilityToggle.setAttribute('aria-expanded', 'false');
    accessibilityToggle.focus();
  });

  accessibilityPanel.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      accessibilityPanel.hidden = true;
      accessibilityToggle.setAttribute('aria-expanded', 'false');
      accessibilityToggle.focus();
    }
  });

  decreaseButton?.addEventListener('click', () => {
    const currentIndex = fontSizes.indexOf(preferences.fontSize);
    if (currentIndex > 0) {
      preferences.fontSize = fontSizes[currentIndex - 1];
      updatePanel();
      savePreferences();
      announce(`Tamanho do texto: ${preferences.fontSize}%.`);
    }
  });

  increaseButton?.addEventListener('click', () => {
    const currentIndex = fontSizes.indexOf(preferences.fontSize);
    if (currentIndex < fontSizes.length - 1) {
      preferences.fontSize = fontSizes[currentIndex + 1];
      updatePanel();
      savePreferences();
      announce(`Tamanho do texto: ${preferences.fontSize}%.`);
    }
  });

  settingButtons.forEach((button) => {
    button.addEventListener('click', () => {
      if (!(button instanceof HTMLButtonElement)) {
        return;
      }

      const setting = button.dataset.accessibilitySetting;
      if (setting === 'contrast') {
        preferences.contrast = !preferences.contrast;
      } else if (setting === 'links') {
        preferences.links = !preferences.links;
      } else if (setting === 'motion') {
        preferences.motion = !preferences.motion;
      } else {
        return;
      }

      updatePanel();
      savePreferences();
      announce(`${button.textContent.trim()} ${button.getAttribute('aria-pressed') === 'true' ? 'ativado' : 'desativado'}.`);
    });
  });

  accessibilityPanel.querySelector('[data-accessibility-reset]')?.addEventListener('click', () => {
    preferences.fontSize = 100;
    preferences.contrast = false;
    preferences.links = false;
    preferences.motion = false;
    updatePanel();
    savePreferences();
    announce('Preferências de acessibilidade restauradas.');
  });
}

const contactForm = document.querySelector('[data-contact-form]');
const feedback = document.querySelector('[data-feedback]');

if (contactForm instanceof HTMLFormElement && feedback) {
  contactForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const submitButton = contactForm.querySelector('button[type="submit"]');
    if (!(submitButton instanceof HTMLButtonElement)) {
      return;
    }

    submitButton.disabled = true;
    feedback.classList.remove('is-error');
    feedback.textContent = 'Enviando mensagem...';
    feedback.hidden = false;

    try {
      const response = await fetch(contactForm.action, {
        method: 'POST',
        body: new FormData(contactForm),
        headers: { Accept: 'application/json' },
      });
      const result = await response.json();
      const success = response.ok && result.success === true;

      feedback.textContent = result.message || 'Não foi possível enviar o e-mail.';
      feedback.classList.toggle('is-error', !success);

      if (success) {
        contactForm.reset();
      }
    } catch {
      feedback.textContent = 'Não foi possível enviar a mensagem. Verifique sua conexão e tente novamente.';
      feedback.classList.add('is-error');
    } finally {
      submitButton.disabled = false;
    }
  });
}
